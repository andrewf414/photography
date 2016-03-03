<?php
//connect to mysql
//$mysqli = new mysqli('localhost', 'root', '', 'personal-site');
$mysqli = new mysqli('localhost', 'fitzandp', '9Pta6kw9N6', 'fitzandp_personal-site');

if (mysqli_connect_errno()) {
    printf("DB connection failed: %s\n", mysqli_connect_error());
    exit();
}
?>