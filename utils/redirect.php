<?php

function redirect_user($role)
{
    if ($role == "admin") {
        header("Location: index.php");
    } else {
        header("Location: login.php");
    }
}

?>
