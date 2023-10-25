<?php

require_once("conn.php");

if(isset($_POST['submit'])) {
    var_dump($_POST);
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['pass'];
$query = "INSERT INTO `users` VALUES (:firstName, :lastName, :email, :password)";
$stmt = $connection->prepare($query);
$stmt->bindParam('firstName', $firstName);
$stmt->bindParam('lastName', $lastName);
$stmt->bindParam('email', $email);
$stmt->bindParam('password', $password);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);
?>