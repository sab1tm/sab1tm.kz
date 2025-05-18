<?php

include "config/db.php";

if (isset($_COOKIE["id"]) and isset($_COOKIE["hash"])) {
    if (
        $result = mysqli_query(
            $link,
            "SELECT id, username, role, hash FROM users WHERE id=" .
                intval($_COOKIE["id"])
        )
    ) {
        $authorized = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
    }
    if (
        $authorized["hash"] !== $_COOKIE["hash"] ||
        $authorized["id"] !== $_COOKIE["id"]
    ) {
        setcookie("id", "", time() - 3600 * 24, "/");
        setcookie("hash", "", time() - 3600 * 24, "/");
        header("Location: login.php");
        exit();
    } else {
        $is_authorized = true;
    }
} else {
    $is_authorized = false;
    header("Location: login.php");
}
