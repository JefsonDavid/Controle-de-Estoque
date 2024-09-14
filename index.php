<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index_style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="index_action.php">
            <h1>Entrar na Plataforma</h1>
            <div class="input-container">
                <input placeholder="Email" type="email" name="email" required>
                <img width="20" height="20" src="https://img.icons8.com/ios/50/user--v1.png" alt="user--v1">
            </div>

            <div class="input-container">
                <input placeholder="Senha" type="password" name="senha" required>
                <img width="20" height="20" src="https://img.icons8.com/ios/50/lock--v1.png" alt="lock--v1"/>
                <a href="#">Esqueci minha senha</a>
            </div>

            <button type="submit" class="submit-button">Login</button><br/>

            <div class="register-link">
                <p>Ainda não está cadastrado? <a href="adicionar_usuario.php">Cadastrar</a></p>
            </div>
        </form>
    </div>
</body>
</html>