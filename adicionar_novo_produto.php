<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/adicionar_novo_produto_style.css">
    <title>Adicionar Novo Produto</title>
</head>
<body>
    <form method="POST" action="adicionar_produto_action.php">
        <h1>ADICIONAR NOVO PRODUTO</h1><br/><br/>
        <label>
            NOME DO PRODUTO:<br/>
            <input type="text" name="nome">
        </label><br/><br/>

        <label>
            QUANTIDADE:<br/>
            <input type="number" name="quantidade">
        </label><br/><br/>

        <label>
            VALOR:<br/>
            <input type="number" name="valor">
        </label><br/><br/><br/>

        <input class="btn" type="submit" value="ADICIONAR 💾">
    </form>
</body>
</html>