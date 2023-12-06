<?php

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

require_once("conn.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$id = $_POST['id'];


$password = $_POST['password'];
$conf_pass = $_POST['confirmPassword'];

echo $password . " " . $conf_pass;


if($password != $conf_pass) {
    header("Location: editUserForm.php?id=" . $id . "&mes=99");
} else {

// encrypt password
$hashedPass = password_hash($password, PASSWORD_BCRYPT);



if($password == "") { //pass is empty
    //only update other stuff

    $query = "UPDATE `users` SET `first_name` = :first_name, `last_name` = :last_name, `email` = :email WHERE `id` = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam('id', $id);
    $stmt->bindParam('first_name', $first_name);
    $stmt->bindParam('last_name', $last_name);
    $stmt->bindParam('email', $email);
    $stmt->execute();
    $result = $stmt->fetch();

    header("Location: manageUser.php");

} else {
    $query = "UPDATE `users` SET `first_name` = :first_name, `last_name` = :last_name, `email` = :email, `password` = :password WHERE `id` = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam('id', $id);
    $stmt->bindParam('first_name', $first_name);
    $stmt->bindParam('last_name', $last_name);
    $stmt->bindParam('email', $email);
    $stmt->bindParam('password', $hashedPass);
    $stmt->execute();
    $result = $stmt->fetch();
    
    header("Location: manageUser.php");
}


}
?>