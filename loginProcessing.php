<?php


    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
    }

    require_once("conn.php");

    // if(isset($_POST['submit'])) {
    //     var_dump($_POST);
    // } DEBUGGING TOOL

    $email = $_POST['email'];
    $password = $_POST['pass'];

    //look into php data validation; strip_tags(), html_special_chars(), regular expressions regex (regexr.com) ((phone number matches format for ex.))
    $query = "SELECT * FROM `users` WHERE `email` = :email";
    $stmt = $connection->prepare($query);
    $stmt->bindParam('email', $email);
    $stmt->execute();
    $result = $stmt->fetch();

    //check if (hashed) password is correct
    if(password_verify($password, $result['password'])){ //i.e. login successful
        //fill session variables with result
        $_SESSION['id'] = $result['id'];
        $_SESSION['privilege'] = $result['privilege'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['firstName'] = $result['first_name'];
        header("Location: index.php");

    } else { //login failed
       header("Location: failedLogin.php");
    }

?>