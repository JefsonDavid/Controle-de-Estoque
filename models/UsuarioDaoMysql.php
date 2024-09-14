<?php
    require_once 'Usuario.php';

    class UsuarioDaoMysql implements UsuarioDao {
        private $pdo;

        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }

        public function addUsuario(Usuario $u) {

        }

        public function autheticationLogin($email, $senha) {
            $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->execute();

            if($sql->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }