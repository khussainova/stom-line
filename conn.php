<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['HOST'];
$db = $_ENV['DB'];
$user = $_ENV['USER'];
$pass = $_ENV['PASS'];
$charset = $_ENV['CHARSET'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


?>