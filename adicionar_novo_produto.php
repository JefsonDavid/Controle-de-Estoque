<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Novo Produto</title>
</head>
<body>
    <h1>ADICIONAR NOVO PRODUTO</h1>

    <form method="POST" action="adicionar_produto_action.php">
        <label>
            NOME DO PRODUTO:<br/>
            <input type="text" name="nome">
        </label><br/>

        <label>
            QUANTIDADE:<br/>
            <input type="number" name="quantidade">
        </label><br/>

        <label>
            VALOR:<br/>
            <input type="number" name="valor">
        </label><br/><br/>

        <input type="submit" value="ADICIONAR">
    </form>
</body>
</html>