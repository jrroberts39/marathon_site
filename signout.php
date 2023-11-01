<?php
session_start();
// $_SESSION['username'] = null;
// $_SESSION['privilege'] = null;
session_unset();
header("Location: index.php");

?>