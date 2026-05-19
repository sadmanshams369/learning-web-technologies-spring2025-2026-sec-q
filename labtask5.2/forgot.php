<?php
session_start();

if(isset($_POST['submit'])){
    if($_POST['email'] == $_SESSION['email']){
        echo "Password: " . $_SESSION['pass'];
    } else {
        echo "Email not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<div style="width:500px; margin:auto; border:1px solid black; padding:10px;">

<h3 align="center">Forgot Password</h3>
<hr>

<form method="post" align="center">
    Email: <input type="email" name="email"><br><br>
    <button type="submit" name="submit">Submit</button>
</form>

</div>

</body>
</html>