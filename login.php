<!doctype html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Dev's Bay</title>
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="login.php" method="post">
			          <input type="text" name="login" placeholder="Логин">
			          <br><br>
			          <input type="password" name="password" placeholder="Пароль">
			          <br><br>
			          <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
