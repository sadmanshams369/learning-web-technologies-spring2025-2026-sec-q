<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM employees WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: dashboard.php");
} else {
    echo "Delete failed";
}
?>