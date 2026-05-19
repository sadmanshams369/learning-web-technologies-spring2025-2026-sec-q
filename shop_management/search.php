<?php
include "db.php";

$search = $_GET['search'];

$sql = "SELECT id, employee_name, contact_no, username 
        FROM employees 
        WHERE employee_name LIKE '%$search%' 
        OR username LIKE '%$search%'";

$result = mysqli_query($conn, $sql);

$employees = [];

while ($row = mysqli_fetch_assoc($result)) {
    $employees[] = $row;
}

echo json_encode($employees);
?>