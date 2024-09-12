<?php
    require 'config.php';
    require 'models/ProdutoDaoMysql.php';

    $produtoDao = new ProdutoDaoMysql($pdo);

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $quantidade = filter_input(INPUT_POST, 'quantidade');
    $valor = filter_input(INPUT_POST, 'valor');

    if($id && $nome) {
        $produto = new Produto();
        $produto->setId($id);
        $produto->setNome($nome);
        $produto->setQuantidade($quantidade);
        $produto->setValor($valor);

        $produtoDao->update($produto);

        header("Location: principal.php");
        exit;

    } else {
        header("Location: editar_produto.php");
        exit;
    }