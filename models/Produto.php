<?php
    class Produto {
        private $id;
        private $nome;
        private $quantidade;
        private $valor;

        //=====================================
        //============= GET E SET =============
        //=====================================

        public function getId() {
            return $this->id;
        }

        public function setId($i) {
            $this->id = trim($i);
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($n) {
            $this->nome = $n;
        }

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($q) {
            $this->quantidade = $q;
        }

        public function getValor() {
            return $this->valor;
        }

        public function setValor($v) {
            $this->valor = $v;
        }
    }

        //=========================================
        //======== INTERFACE CLASS PRODUTO ========
        //=========================================

        interface ProdutoDao {
            public function findAll();
            public function findById($id);
            public function add(Produto $p);
            public function update(Produto $p);
            public function delete($id);
        }
    