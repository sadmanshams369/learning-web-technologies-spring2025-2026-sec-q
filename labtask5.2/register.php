<?php
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if($password == $confirm){

        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['user'] = $username;
        $_SESSION['pass'] = $password;
        $_SESSION['gender'] = $gender;
        $_SESSION['dob'] = $dob;

        echo "Registration Successful! <br>";
        echo "<a href='login.php'>Login Now</a>";

    } else {
        echo "Password & Confirm Password not match!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<div style="width:450px; margin:auto; border:1px solid black; padding:10px;">

<h3 style="text-align:center;">Registration</h3>

<div align="center">
    <a href="index.php">Home</a> |
    <a href="login.php">Login</a> |
    <a href="register.php">Registration</a>
</div>
<hr>

<hr>

<form method="post">

<table>

<tr>
    <td>Name:</td>
    <td><input type="text" name="name"></td>
</tr>

<tr>
    <td>Email:</td>
    <td><input type="email" name="email"></td>
</tr>

<tr>
    <td>Username:</td>
    <td><input type="text" name="username"></td>
</tr>

<tr>
    <td>Password:</td>
    <td><input type="password" name="password"></td>
</tr>

<tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="confirm"></td>
</tr>

<tr>
    <td>Gender:</td>
    <td>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
    </td>
</tr>

<tr>
    <td>Date of Birth:</td>
    <td><input type="date" name="dob"></td>
</tr>

<tr>
    <td></td>
    <td><button type="submit" name="submit">Register</button></td>
</tr>

</table>

</form>

</div>

</body>
</html>