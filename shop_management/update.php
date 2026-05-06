<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name = trim($_POST['employee_name']);
    $contact = trim($_POST['contact_no']);
    $username = trim($_POST['username']);

    if ($name == "" || $contact == "" || $username == "") {
        echo "All fields are required";
    } else {
        $update = "UPDATE employees 
                   SET employee_name='$name',
                       contact_no='$contact',
                       username='$username'
                   WHERE id=$id";

        if (mysqli_query($conn, $update)) {
            header("Location: dashboard.php");
        } else {
            echo "Update failed";
        }
    }
}
?>

<form method="POST">
    <h2>Update Employee</h2>

    Name:
    <input type="text" name="employee_name" value="<?php echo $row['employee_name']; ?>"><br><br>

    Contact:
    <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>"><br><br>

    Username:
    <input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>

    <button type="submit" name="update">Update</button>
</form>