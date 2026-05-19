<!DOCTYPE html>
<html>
<body>

<?php
$email = "";

if(isset($_POST['email'])){
    $email = $_POST['email'];
    echo "Handler Output: " . $email;
}
?>

<br><br>

<form method="post">
  Email: <input type="email" name="email" value="<?php echo $email; ?>">
  <input type="submit">
</form>

<?php
if($email != ""){
    echo "<br>Current Page Output: " . $email;
}
?>

</body>
</html>