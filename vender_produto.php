<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require 'config.php';
        require 'models/ProdutoDaoMysql.php';

        $produtoDao = new ProdutoDaoMysql($pdo);

        $id = filter_input(INPUT_GET, 'id');

        if($id) {
            $produto = $produtoDao->findById($id);
        }

    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Produto</title>
</head>
<body>
    <form method="POST" action="vender_produto_action.php">

        <input type="hidden" name="id" value="<?= $produto->getId(); ?>">

        <label>
            Quantos produtos você vendeu?<br/><br/>
            <input type="number" name="quantidade">
        </label><br/><br/>
        
            <input type="submit" value="Vender" onclick="return confirm('Tem certeza que deseja excluir?')">
    </form>
</body>
</html>