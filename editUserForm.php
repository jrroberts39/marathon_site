<?php

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

require_once("conn.php");

if(isset($_GET['id'])) { //valid value

    $id = $_GET['id'];
    $query = "SELECT * FROM `users` WHERE `id` = :id";
    $stmt = $connection->prepare($query);
    $stmt->bindParam('id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    ?>


    <link rel="stylesheet" href="style.css">

    <form action = "userUpdateProcessing.php" method="POST">
        <h1>Update Info</h1>

        <input type = "hidden" value = "<?php echo $result['id']?>" name = "id"/>
        <h3>first_name</h3><input name ="first_name" type = "text" value = "<?php echo $result['first_name'] ?>"/>
        <h3>last_name</h3><input name ="last_name" type = "text" value = "<?php echo $result['last_name'] ?>"/>
        <h3>email</h3><input name ="email" type = "text" value = "<?php echo $result['email'] ?>"/>
        <?php 
        if($_SESSION['id'] == $result['id']) { ?>
        <h3>Password</h3><input name ="password" type = "password" value = ""/>
        <h3>Confirm Password</h3><input name ="confirmPassword" type = "password" value = ""/>
        <?php } 
        if(isset($_GET['mes']) && $_GET['mes'] == 99) {
            ?><p style = "red"> PASSWORDS DO NOT MATCH </p> <?php
        }
        ?>
        <button type = "submit" name = "submit">submit</button><br><br>
        <a href="index.php">Home</a>

    </form>

    <?php

} else { //invalid

}

?>