<!DOCTYPE html>
<html>
<body>

<?php
$gender = "";

if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
    echo "Handler Output: " . $gender;
}
?>

<br><br>

<form method="post">
  <input type="radio" name="gender" value="Male"
  <?php if($gender=="Male") echo "checked"; ?>> Male

  <input type="radio" name="gender" value="Female"
  <?php if($gender=="Female") echo "checked"; ?>> Female

  <input type="submit">
</form>

<?php
if($gender != ""){
    echo "<br>Current Page Output: " . $gender;
}
?>

</body>
</html>