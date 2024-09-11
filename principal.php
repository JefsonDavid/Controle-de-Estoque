<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            require 'config.php';
            require 'models/ProdutoDaoMysql.php';

            $produtoDao = new ProdutoDaoMysql($pdo);

            $lista = $produtoDao->findAll();
        ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/principal_style.css">
        <title>Document</title>
    </head>
    <body>
        <a class="adicionar_novo" href="adicionar_novo_produto.php">Adicionar Novo Produto</a>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>QUANTIDADE</th>
                <th>VALOR</th>
                <th>OPÇÕES</th>
            </tr>

            <?php foreach($lista as $produto): ?>
                <tr>
                    <td><?= $produto->getId(); ?></td>
                    <td><?= $produto->getNome(); ?></td>
                    <td><?= $produto->getQuantidade(); ?></td>
                    <td>R$ <?= $produto->getValor(); ?>,00</td>
                    <td>
                        <a class="adicionar" href="adicionar_produto.php">Adicionar</a>

                        <a class="editar" href="editar_produto.php?id=<?= $produto->getId(); ?>">Editar</a>

                        <a class="excluir" href="Excluir_produto.php?<?= $produto->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>