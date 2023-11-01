<?php

session_start();

require_once("conn.php");

// if(isset($_POST['submit'])) {
//     var_dump($_POST);
// }

$email = $_POST['email'];
//look into php data validation; strip_tags(), html_special_chars(), regular expressions regex (regexr.com) ((phone number matches format for ex.))
$query = "SELECT * FROM `users` WHERE `email` = :email";
$stmt = $connection->prepare($query);
$stmt->bindParam('email', $email);
$stmt->execute();
$result = $stmt->fetch();
if($result) { //i.e. login successful
    if($result['privilege'] == 1) {
        echo "Hello Admin";
    } else {
        echo "Hello Regular User";
    }
}


$_SESSION['username'] = $result['email'];
$_SESSION['privilege'] = $result['privilege'];

header("Location: index.php");

?>