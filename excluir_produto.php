<?php
    require 'config.php';
    require 'models/ProdutoDaoMysql.php';

    $produtoDao = new ProdutoDaoMysql($pdo);

    $id = filter_input(INPUT_GET, 'id');

    if($id) {
        $produtoDao->delete($id);
    }

    header ("Location: principal.php");
    exit;