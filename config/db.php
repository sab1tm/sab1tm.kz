<?php

// $link = mysqli_connect("", "sabtmkz_main", "1!Edp96r7", "sabtmkz_main");
$link = mysqli_connect("", "root", "", "sabtmkz");

if (!$link) {
    printf("Can't connect to DB. Error: %s\n", mysqli_connect_error());
    exit();
}

mysqli_set_charset($link, "utf8");

?>
