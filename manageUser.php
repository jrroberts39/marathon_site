<?php 

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}
?>

<html>

    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <h1> User Access </h1>

        <table id = "users">
            <th>id</th>
            <th>first_name</th>
            <th>last_name</th>            
            <th>email</th>
            <th>password</th>
            <th>privilege</th>
            <th>Function</th>
            <?php
                require_once("conn.php");

                if($_SESSION['privilege'] == 1) { 
                    $query = "SELECT * FROM `users`";
                    $stmt = $connection->prepare($query);
                    $stmt->execute();
                    // $result = $stmt->fetch();
                    // var_dump($result); 
                } else { 
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM `users` WHERE `email` = :email";
                    $stmt = $connection->prepare($query);
                    $stmt->bindParam('email', $email);
                    $stmt->execute();
                    // $result = $stmt->fetch();
                    // var_dump($result); 
                }

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    ?>
            <tr>
                <td> <?php echo $row['id'];?> </td> 
                <td> <?php echo $row['first_name'];?> </td>
                <td> <?php echo $row['last_name'];?> </td>
                <td> <?php echo $row['email'];?> </td>
                <td> <?php echo $row['password'];?> </td>
                <td> <?php echo $row['privilege'];?> </td>
                <td> <a style = "color: black;" href = "<?php echo 'editUserForm.php?id=' . $row['id']?>"> EDIT </a> </td> 

                <!-- Create new form based on current row's attributes (keep indexes?) -->
            </tr>   <?php
                }
        ?>
        </table>

        <style> a {color: white} </style>
        <span> <a href = "index.php">Home</a></span>
    </body>
</html>
