<!doctype html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Dev's Bay</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
            }
            .login-form {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="login-form">
            <form action="login.php" method="post">
			    <input type="text" name="login" placeholder="Логин">
			    <br><br>
			    <input type="password" name="password" placeholder="Пароль">
			    <br><br>
			    <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
