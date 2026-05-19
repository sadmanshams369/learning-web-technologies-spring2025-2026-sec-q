<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

if(isset($_POST['submit'])){
    if($_POST['old'] == $_SESSION['pass']){
        $_SESSION['pass'] = $_POST['new'];
        echo "Password Changed!";
    } else {
        echo "Wrong Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:10px;">

<h3 align="center">Change Password</h3>
<hr>

<form method="post" align="center">
    Old: <input type="password" name="old"><br><br>
    New: <input type="password" name="new"><br><br>

    <button type="submit" name="submit">Change</button>
</form>

</div>

</body>
</html>