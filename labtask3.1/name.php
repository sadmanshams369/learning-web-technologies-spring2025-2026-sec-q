<!DOCTYPE html>
<html>
<body>

<?php
$name = "";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    echo "Handler Output: " . $name;
}
?>

<br><br>

<form method="post">
  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <input type="submit">
</form>

<?php
if($name != ""){
    echo "<br>Current Page Output: " . $name;
}
?>

</body>
</html>