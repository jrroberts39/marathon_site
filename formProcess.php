<?php

require_once("conn.php");

if(isset($_POST['submit'])) {
    var_dump($_POST);
}

$firstName = $_POST['fName'];
//use email in future as single unique binding var
//look into php data validation; strip_tags(), html_special_chars(), regular expressions regex (regexr.com) ((phone number matches format for ex.))
$query = "SELECT * FROM `users` WHERE `first_name` = :first_name";
$stmt = $connection->prepare($query);
$stmt->bindParam('first_name', $firstName);
$stmt->execute();
$result = $stmt->fetchAll();
var_dump($result);

?>