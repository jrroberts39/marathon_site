<?php
    // connection
    require_once("conn.php");
    
    // getting variables
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // encrypt password
    $hashedPass = password_hash($password, PASSWORD_BCRYPT);

    // sql query (insert)
    $query = "INSERT INTO `users` (first_name, last_name, email, password, privilege) VALUES (:firstName, :lastName, :email, :password, 0)";

    // load from post request6
    $stmt = $connection->prepare($query);
    $stmt->bindParam('firstName', $firstName);
    $stmt->bindParam('lastName', $lastName);
    $stmt->bindParam('email', $email);
    $stmt->bindParam('password', $hashedPass);
    $stmt->execute();
    $result = $stmt->fetchAll();
    header("Location: index.php");
?>