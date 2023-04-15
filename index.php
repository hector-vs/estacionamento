<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body id="body-index">
    <main id="main-login-area">
        <div id="main-login">
            <img src="img/logo.png" alt="Logo" height="90px">
            <form action="processalog.php" method="POST">
                <input type="email" name="user" id="user" autocomplete="off" placeholder="E-mail">
                <input type="password" name="pass" id="pass" placeholder="Senha">
                <input type="submit" value="Entrar" id="inputenviar">
            </form>
        </div>
    </main>
</body>
</html>