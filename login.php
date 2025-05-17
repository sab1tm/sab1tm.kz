<!doctype html>
<html>
    <head>
        <?php include "template/head.php"; ?>
        <title>Dev's Bay</title>
        <style>
            :root {
                --bg: black;
                --primary-color: palegreen;

                --std-font-size: 14pt;

                --padding: 5px;
                --margin: 10px;
            }

            * {
                background-color: var(--bg);
                color: var(--primary-color);
                padding: 0;
                margin: 0;
            }
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                font-family: 'Arial', sans-serif;
            }
            .login-form {
                width: 300px;
                border: 1px solid var(--primary-color);
                padding: 40px;
                border-radius: 10px;
            }
            .login-form input {
                width: 260px;
                padding: 12px 15px;
                margin: 8px 0;
                border: 2px solid var(--primary-color);
                border-radius: 5px;
                font-size: 16px;
            }
            .login-form input:focus {
                outline: none;
            }
            .login-form button {
                width: 293px;
                padding: 15px;
                background-color: var(--primary-color);
                border: none;
                border-radius: 5px;
                color: black;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="login-form">
            <form action="login.php" method="post">
                <input type="text" name="login" placeholder="Логин"> <br>
                <input type="password" name="password" placeholder="Пароль"> <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
