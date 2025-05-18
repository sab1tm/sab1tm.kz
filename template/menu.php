<?php

echo '

<div class="menu">
    <a href="/">HOME</a>
    <a href="/notes.php">NOTES</a>
';

if ($is_authorized) {
    echo '<a href="/logout.php">LOGOUT</a>';
}

echo "</div>";

?>
