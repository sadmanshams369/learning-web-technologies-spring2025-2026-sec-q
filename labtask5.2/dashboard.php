<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<div style="width:600px; margin:20px auto; border:1px solid black;">

    <div style="padding:10px;">
        <h3>Dashboard</h3>
    </div>

    <hr>

    <div style="padding:10px;">
        Logged in as <?php echo $_SESSION['user']; ?> |
        <a href="logout.php">Logout</a>
    </div>

    <hr>

    <div style="display:flex;">

        <div style="width:200px; border-right:1px solid black; padding:10px;">
            <b>Account</b>
            <hr>

            <ul style="list-style:none; padding-left:0;">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="edit.php">Edit Profile</a></li>
                <li><a href="change_pass.php">Change Password</a></li>
            </ul>
        </div>

        <div style="flex:1; padding:10px;">
            <h4>Welcome, <?php echo $_SESSION['user']; ?>!</h4>
            <p>This is your dashboard.</p>
        </div>

    </div>

</div>

</body>
</html>