<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <h1 class="title">Tela de login!</h1>

    <div id="container">

        <div id="form">
            <input name="username" type="text" placeholder="Username" id="username"> <br>
            <input name="password" type="password" placeholder="Password" id="password"> <br>
            <button class="btn-form" id="login_btn" type="button" onclick="fazerLogin()">Login</button>
        </div>
    </div>

    <script src="/assets/js/login.js"></script>
</body>
</html>