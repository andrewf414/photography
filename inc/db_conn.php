<?php
//connect to mysql
$mysqli = new mysqli('localhost', 'root', 'root', 'personal-site');

if (mysqli_connect_errno()) {
    printf("DB connection failed: %s\n", mysqli_connect_error());
    exit();
}
?>