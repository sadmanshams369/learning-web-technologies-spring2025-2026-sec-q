<?php
session_start();
include "db.php";

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == "" || $password == ""){
        echo "Username and Password required!";
    }
    else{

        $sql = "SELECT * FROM employees
                WHERE username='$username'
                AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            $_SESSION['username'] = $username;

            header("Location: dashboard.php");
        }
        else{
            echo "User not found, register first!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Employee Login</h2>

<form method="POST">

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <button type="submit" name="login">Login</button>

</form>

<br>

<a href="register.php">
    <button>Register</button>
</a>

</body>
</html>