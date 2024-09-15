<?php
    require 'config.php';
    require 'models/ProdutoDaoMysql.php';

    $produtoDao = new ProdutoDaoMysql($pdo);

    $qnt = filter_input(INPUT_GET, 'id');

    if($qnt) {

        $produto = new Produto();
        $produto->setQuantidade($qnt);

        $produtoDao->vender($qnt);
        
        header("Location: principal.php");
        exit;

    } else {
        header("Location: editar_produto.php");
        exit;
    }