<!doctype html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Dev's Bay</title>
        <link rel="stylesheet" href="/css/login.css">
    </head>
    <body>
        <div class="login-form">
            <form action="login.php" method="post">
                <input type="text" name="login" placeholder="Логин"> <br>
                <input type="password" name="password" placeholder="Пароль"> <br><br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
