<?php

define('USER', 'root');
define('HOST', 'localhost');
define('DATABASE', 'run_club');
define("PASSWORD", '');

try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>