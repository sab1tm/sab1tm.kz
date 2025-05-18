<?php

include "config/db.php";
include "utils/redirect.php";

function generate_code($length = 6)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}

function set_error_code($msg)
{
    echo $msg;
}

if (isset($_POST["submit"])) {
    if (
        $result = mysqli_query(
            $link,
            "SELECT id, username, password, disabled, role FROM users WHERE username='" .
                htmlspecialchars($_POST["login"], ENT_QUOTES) .
                "'"
        )
    ) {
        if (mysqli_num_rows($result) == 0) {
            set_error_code("access_denied");
        }
        $user_db = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }
    if ($user_db["password"] === md5($_POST["password"])) {
        if ($user_db["disabled"] == "true") {
            set_error_code("user_is_disabled");
        } else {
            $hash = md5(generate_code(10));
            $ip = $_SERVER["REMOTE_ADDR"];
            mysqli_query(
                $link,
                "UPDATE users SET hash='" .
                    $hash .
                    "', ip='" .
                    $_SERVER["REMOTE_ADDR"] .
                    "' WHERE id=" .
                    $user_db["id"]
            );
            setcookie("id", $user_db["id"], time() + 60 * 60 * 12);
            setcookie("hash", $hash, time() + 60 * 60 * 12);
            redirect_user($user_db["role"]);
        }
    } else {
        set_error_code("incorrect_login_or_password");
    }
}

?>
