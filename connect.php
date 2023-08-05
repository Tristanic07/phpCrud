<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$connection = new mysqli ($servername, $username, $password, $database);

if($connection->connect_error) {
    die("Connection failed" . $connection->connection_error);
}
?>