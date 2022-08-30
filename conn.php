<?php
require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = mysqli_connect($_ENV['HOST'], $_ENV['USER'], $_ENV['PASS'], $_ENV['DB']);

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name', '$email', '$number', '$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

$host = $_ENV['HOST'];
$db = $_ENV['DB'];
$user = $_ENV['USER'];
$pass = $_ENV['PASS'];
$charset = $_ENV['CHARSET'];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";


?>