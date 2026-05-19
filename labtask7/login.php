<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_SESSION['users'][$username])) {
    if($_SESSION['users'][$username]['password'] == $password) {

        $_SESSION['login_user'] = $username;
        $_SESSION['role'] = $_SESSION['users'][$username]['role'];

        header("Location: home.php");
    } else {
        echo "Wrong password!";
    }
} else {
    echo "User not found!";
}
?>