<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'config.php';
        require 'models/ProdutoDaoMysql.php';

        $produtoDao = new ProdutoDaoMysql($pdo);

        $produto = false;

        $id = filter_input(INPUT_GET, 'id');

        if($id) {
            $produto = $produtoDao->findById($id);
        }

        if($produto === false) {
            header("Location: principal.php");
            exit;
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/editar_produto_style.css">
    <title>Editar Produtos</title>
</head>
<body>
    <form method="POST" action="editar_produto_action.php">

        <h1>EDITAR PRODUTOS</h1><br/> 

        <input type="hidden" name="id" value="<?= $produto->getId(); ?>">

        <label>
            NOME:<br/>
            <input type="text" name="nome" value="<?= $produto->getNome(); ?>">
        </label><br/><br/>
            
        <label>
            QUANTIDADE:<br/>
            <input type="text" name="quantidade" value="<?= $produto->getQuantidade(); ?>">
        </label><br/><br/>
            
        <label>
            VALOR:<br/>
            <input type="text" name="valor" value="<?= $produto->getValor(); ?>">
        </label><br/><br/><br/>

        <input class="btn" type="submit" value="SALVAR 💾">
    </form>

</body>
</html>