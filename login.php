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
                padding: 40px;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }
            .login-form input {
                width: 100%;
                padding: 12px 15px;
                margin: 8px 0;
                border: 2px solid var(--primary-color);
                border-radius: 5px;
                font-size: 16px;
                transition: all 0.3s ease;
            }
            .login-form input:focus {
                outline: none;
                border-color: #32CD32;
                box-shadow: 0 0 5px rgba(50, 205, 50, 0.3);
            }
            .login-form button {
                width: 100%;
                padding: 12px;
                background-color: var(--primary-color);
                border: none;
                border-radius: 5px;
                color: #333;
                font-size: 16px;
                font-weight: bold;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .login-form button:hover {
                background-color: #98FB98;
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class="login-form">
            <form action="login.php" method="post">
                <input type="text" name="login" placeholder="Логин"> <br>
                <input type="password" name="password" placeholder="Пароль">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </body>
</html>
