<?php

if(session_status() != PHP_SESSION_ACTIVE) {
    session_start();
} 


// echo "<script> console.log('PRIV:'  + <?php $_SESSION['privilege'] ?>); </script>";
// echo "EMAIL: " . $_SESSION['email'];
// echo "FIRST NAME" . $_SESSION['firstName'];

?>
