<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$_SESSION['users'][$username] = [
    "password" => $password,
    "role" => $role
];

echo "Registration successful!";
echo "<br><a href='login.html'>Login Now</a>";
?>