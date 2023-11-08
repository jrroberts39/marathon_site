<html>
    <link rel="stylesheet" href="style.css">
    <div class = "container">
        <h1>Create Account</h1>
        <p>Already have an account? <a href = "register.php">Sign In</a></p>
        <form action = "registerProcessing.php" method="POST"> <!--Processing Form-->
            <h2>First Name:</h2><input name ="firstName" type = "text"/>
            <h2>Last Name:</h2><input name = "lastName" type = "text"/>
            <h2>Email:</h2><input name ="email" type = "text"/>
            <h2>Password:</h2><input name = "pass" type = "password"/>
            <button type = "submit" name = "submit">submit</button><br><br>
            <a href = "index.php">Return Home</a>
        </form>
    </div>
</html>


<!--TODO Ensure no duplicate email entries! (count if greater than 0 reject)-->