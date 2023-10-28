<html>
<link rel="stylesheet" href="style.css">
<div class = "container">
<h1>Create Account</h1>
<p>Already have an account? <a href = "createUser.php">Sign In</a></p>
<form action = "newUserFormProcess.php" method="POST">
<h2>First Name:</h2><input name ="firstName" type = "text"/>
<h2>Last Name:</h2><input name = "lastName" type = "text"/>
<h2>Email:</h2><input name ="email" type = "text"/>
<h2>Password:</h2><input name = "pass" type = "text"/>
<button type = "submit" name = "submit">submit</button><br><br>
<a href = "index.html">Return Home</a>
</div>
</form>
</html>



