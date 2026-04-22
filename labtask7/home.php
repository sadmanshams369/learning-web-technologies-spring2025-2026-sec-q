<?php
session_start();

if(!isset($_SESSION['login_user'])) {
    header("Location: login.html");
}

if(!isset($_SESSION['products'])) {
    $_SESSION['products'] = [
        1 => ["name"=>"Pen", "price"=>10, "qty"=>100],
        2 => ["name"=>"Book", "price"=>50, "qty"=>200]
    ];
}

if(isset($_POST['add']) && $_SESSION['role']=="admin") {
    $id = count($_SESSION['products']) + 1;
    $_SESSION['products'][$id] = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "qty" => $_POST['qty']
    ];
}

if(isset($_GET['delete']) && $_SESSION['role']=="admin") {
    $id = $_GET['delete'];
    unset($_SESSION['products'][$id]);
}

if(isset($_POST['update']) && $_SESSION['role']=="admin") {
    $id = $_POST['id'];
    $_SESSION['products'][$id] = [
        "name" => $_POST['name'],
        "price" => $_POST['price'],
        "qty" => $_POST['qty']
    ];
}
?>

<h2>Welcome <?php echo $_SESSION['login_user']; ?> (<?php echo $_SESSION['role']; ?>)</h2>

<a href="logout.php">Logout</a>

<h3>Product List</h3>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <?php if($_SESSION['role']=="admin") echo "<th>Action</th>"; ?>
</tr>

<?php foreach($_SESSION['products'] as $id=>$p) { ?>
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $p['name']; ?></td>
    <td><?php echo $p['price']; ?></td>
    <td><?php echo $p['qty']; ?></td>

    <?php if($_SESSION['role']=="admin") { ?>
    <td>
        <a href="home.php?delete=<?php echo $id; ?>">Delete</a>
    </td>
    <?php } ?>
</tr>
<?php } ?>
</table>    

<?php if($_SESSION['role']=="admin") { ?>

<h3>Add Product</h3>
<form method="post">
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    Quantity: <input type="number" name="qty"><br>
    <input type="submit" name="add" value="Add">
</form>

<h3>Update Product</h3>
<form method="post">
    ID: <input type="number" name="id"><br>
    Name: <input type="text" name="name"><br>
    Price: <input type="number" name="price"><br>
    Quantity: <input type="number" name="qty"><br>
    <input type="submit" name="update" value="Update">
</form>

<?php } ?>