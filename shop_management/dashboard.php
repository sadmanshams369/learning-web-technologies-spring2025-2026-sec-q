<?php
session_start();
include "db.php";

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<h2>Employee Management Dashboard</h2>

<a href="register.php">Register Employee</a>

<br><br>

Search Employee:
<input type="text" id="search" placeholder="Search by name or username">

<div id="result"></div>

<script>
document.getElementById("search").addEventListener("keyup", function () {
    let searchValue = this.value;

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "search.php?search=" + searchValue, true);

    xhr.onload = function () {
        if (this.status === 200) {
            let employees = JSON.parse(this.responseText);

            let output = `
                <table border="1" cellpadding="10">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
            `;

            employees.forEach(function(emp) {
                output += `
                    <tr>
                        <td>${emp.id}</td>
                        <td>${emp.employee_name}</td>
                        <td>${emp.contact_no}</td>
                        <td>${emp.username}</td>
                        <td>
                            <a href="update.php?id=${emp.id}">Update</a> |
                            <a href="delete.php?id=${emp.id}">Delete</a>
                        </td>
                    </tr>
                `;
            });

            output += `</table>`;
            document.getElementById("result").innerHTML = output;
        }
    };

    xhr.send();
});
</script>