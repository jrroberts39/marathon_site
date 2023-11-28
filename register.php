<html>
    <link rel="stylesheet" href="style.css">
    <div class = "container">
        <h1>Create Account</h1>
        <p>Already have an account? <a href = "login.php">Sign In</a></p>
        <form action = "registerProcessing.php" method="POST"> <!--Processing Form-->
            <h2>First Name:</h2><input name ="firstName" type = "text"/ required>
            <h2>Last Name:</h2><input name = "lastName" type = "text" required/>
            <h2>Email:</h2><input name ="email" 
                pattern = "[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                type = "text" required />
                <p  style = "color: red;">Email must contain at least 6 characters, @ symbol, and no greater than 127 characters.</p>
            <h2>Password:</h2><input name = "pass" 
                pattern = "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,126}$"
                type = "password" required />
            <button type = "submit" name = "submit">submit</button>
            <p style = "color: red;">Password must contain at least 1 capital letter, 1 lowercase letter, 1 symbol (!
@#$%^&*), 1 number, and be at least 8 characters in length.</p><br><br>
            <a href = "index.php">Return Home</a>
        </form>
    </div>
</html>


<!--TODO Ensure no duplicate email entries! (count if greater than 0 reject)-->