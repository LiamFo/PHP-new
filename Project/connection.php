
<?php

$HOST = 'localhost';
$PORT = '3306';
$USER = 'root';
$pass = '';
$db = 'tf2weapon';

$dph = new PDO('mysql:host='.$HOST.';dbname='.$db.';port='.$PORT, $USER, $pass);
?>