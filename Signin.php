<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="signin.css">
    <title>Document</title>
</head>
<body>
<div class="msign">
    <div class="sign">
        <div class="em"><b><h2><pre>   E-mail</pre></h2><b></div>
        <form action="Signin.php" method="post">
            <input class="eminput" type="text" name="login">
        </form>
        <b><h2><pre>   Пароль</pre></h2><b>
        <form action="Signin.php" method="post">
            <input class="passinput" type="text" name="password">
        </form>
        <button class="but">ВОЙТИ</button>
        <div class="reg"><h2><a href="Registration.php">Регистрация</a></h2></div>

    </div>
</div>
</body>
</html>