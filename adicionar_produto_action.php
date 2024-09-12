<?php
    require 'config.php';
    require 'models/ProdutoDaoMysql.php';

    $produtoDao = new ProdutoDaoMysql($pdo);

    $nome = filter_input(INPUT_POST, 'nome');
    $quantidade = filter_input(INPUT_POST, 'quantidade');
    $valor = filter_input(INPUT_POST, 'valor');

    if($nome && $quantidade && $valor) {
        $novoProduto = new Produto();
        $novoProduto->setNome($nome);
        $novoProduto->setQuantidade($quantidade);
        $novoProduto->setValor($valor);

        $produtoDao->add($novoProduto);

        header ("Location: principal.php");
        exit;
    } else {
        header ("Location: adicionar_novo_produto.php");
        exit;
    }