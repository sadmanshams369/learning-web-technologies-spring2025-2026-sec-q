<?php
include "db.php";

if(isset($_POST['register'])){

    $name = trim($_POST['employee_name']);
    $contact = trim($_POST['contact_no']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($name == "" || $contact == "" || $username == "" || $password == ""){
        echo "All fields are required!";
    }
    else{

        $sql = "INSERT INTO employees(employee_name, contact_no, username, password)
                VALUES('$name','$contact','$username','$password')";

        if(mysqli_query($conn, $sql)){
            echo "Employee Registered Successfully";
        }
        else{
            echo "Username already exists!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

<h2>Employee Registration</h2>

<form method="POST">

    Name:
    <input type="text" name="employee_name">
    <br><br>

    Contact:
    <input type="text" name="contact_no">
    <br><br>

    Username:
    <input type="text" name="username">
    <br><br>

    Password:
    <input type="password" name="password">
    <br><br>

    <button type="submit" name="register">Register</button>

</form>

<br>

<a href="login.php">
    <button>Login</button>
</a>

</body>
</html>