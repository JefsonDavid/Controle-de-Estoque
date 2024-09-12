<?php   

    require_once 'models/Produto.php';

    class ProdutoDaoMysql implements ProdutoDao {
        private $pdo;

        public function __construct(PDO $driver) {
            $this->pdo = $driver;
        }

        // === LISTAR TODOS OS PRODUTOS DO BANCO
        public function findAll() {
            $array = [];

            $sql = $this->pdo->query("SELECT * FROM produtos");

            if($sql->rowCount() > 0) {
                $data = $sql->fetchAll();

                foreach($data as $item) {
                    $p = new Produto();
                    $p->setId($item['id']);
                    $p->setNome($item['nome']);
                    $p->setQuantidade($item['quantidade']);
                    $p->setValor($item['valor']);

                    $array[] = $p;
                }
            }
            return $array;
        }

         //PROCURAR PELO ID
        public function findById($id) {
            $sql =  $this->pdo->prepare("SELECT * FROM produtos WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $data = $sql->fetch();

                $p = new Produto();
                $p->setId($data['id']);
                $p->setNome($data['nome']);
                $p->setQuantidade($data['quantidade']);
                $p->setValor($data['valor']);

                return $p;
            } else {
                return false;
            }
        }

        //ADICIONAR PRODUTO NO BANCO
        public function add(Produto $p) {
            $sql = $this->pdo->prepare("INSERT INTO produtos (nome, quantidade, valor) VALUES (:nome, :quantidade, :valor)");

            $sql->bindValue(':nome', $p->getNome());
            $sql->bindValue(':quantidade', $p->getQuantidade());
            $sql->bindValue(':valor', $p->getValor());
            $sql->execute();

            $p->setId($this->pdo->lastInsertId());
            return $p;

        }

        //ATUALIZAÇÃO DE PRODUTO DO BANCO
        public function update(Produto $p) {
            $sql = $this->pdo->prepare("UPDATE produtos SET nome = :nome, quantidade = :quantidade, valor = :valor WHERE id = :id");

            $sql->bindValue(':nome', $p->getNome());
            $sql->bindValue(':quantidade', $p->getQuantidade());
            $sql->bindValue(':valor', $p->getValor());
            $sql->bindValue(':id', $p->getId());
            $sql->execute();

            return true;
        }

        //DELETAR UM PRODUTO DO BANCO
        public function delete($id) {

        }


    }