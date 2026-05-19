<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['username'] == $_SESSION['user'] &&
       $_POST['password'] == $_SESSION['pass']){
        
        $_SESSION['login'] = true;
        header("Location: dashboard.php");
    } else {
        echo "Invalid Login!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:10px;">

<h3 align="center">Login</h3>
<hr>

<div align="center">
    <a href="index.php">Home</a> |
    <a href="login.php">Login</a> |
    <a href="register.php">Registration</a>
</div>

<hr>

<form method="post" align="center">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>

    <button type="submit" name="submit">Login</button>
</form>

<br>
<div align="center">
    <a href="forgot.php">Forgot Password?</a>
</div>

</div>

</body>
</html>