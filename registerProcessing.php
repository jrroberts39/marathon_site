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

    //check email for duplicates before inserting it 
    $check_query = "SELECT * FROM `users` WHERE `email` = :email";
    $stm = $connection->prepare($check_query);
    $stm->bindParam('email', $email);
    $stm->execute();

    $result_c = $stm->fetchAll();
    
    if(empty($result_c)) { //no such emails found in DB
        // sql query (insert)
        $query = "INSERT INTO `users` (first_name, last_name, email, password, privilege) VALUES (:firstName, :lastName, :email, :password, 0)";

        // load from post request
        $stmt = $connection->prepare($query);
        $stmt->bindParam('firstName', $firstName);
        $stmt->bindParam('lastName', $lastName);
        $stmt->bindParam('email', $email);
        $stmt->bindParam('password', $hashedPass);

        $stmt->execute();
        $result = $stmt->fetchAll();
        header("Location: index.php");
    } else { // duplicate email detected
        ?>
        
        <link rel="stylesheet" href="style.css">

        <div class = "container">
            <h3> Failed Registration. An Account with this Email Already Exists. Please Try Again.</h3>
            <a href = "index.php">Return Home</a>
        </div>
   
   
   <?php }
    
?>