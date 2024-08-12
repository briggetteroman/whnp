<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="title">Tela de registro!</h1>

    <div id="container">

        <div id="form">
            <input name="username" type="text" placeholder="Username" id="username"> <br>
            <input name="password" type="password" placeholder="Password" id="password"> <br>
            <small>Já tem cadastro? <a href="/login">Fazer  login aqui!</a></small><br>
            <button class="btn-form" id="login_btn" type="button" onclick="fazerRegistro()">Registrar</button>
        </div>
    </div>

    <script src="/assets/js/register.js"></script>
</body>
</html>