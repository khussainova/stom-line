<?php

$host = $_ENV['HOST'];
$db = $_ENV['DB'];
$user = $_ENV['USER'];
$pass = $_ENV['PASS'];
$charset = $_ENV['CHARSET'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


?>