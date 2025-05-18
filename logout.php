<?php

include "config/db.php";

mysqli_query(
    $link,
    "UPDATE users SET hash='' WHERE id='" . $_COOKIE["id"] . "'"
);

$is_authorized = false;

header("Location: ../login.php");
exit();

?>
