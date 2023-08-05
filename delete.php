<?php
require_once 'connect.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];


$sql = "DELETE FROM information WHERE id=$id";
$connection->query($sql);
}

header("location: index.php");
exit;
?>