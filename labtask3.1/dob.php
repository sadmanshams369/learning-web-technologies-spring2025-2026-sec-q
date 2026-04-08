<!DOCTYPE html>
<html>
<body>

<?php
$dob = "";

if(isset($_POST['dob'])){
    $dob = $_POST['dob'];
    echo "Handler Output: " . $dob;
}
?>

<br><br>

<form method="post">
  DOB: <input type="date" name="dob" value="<?php echo $dob; ?>">
  <input type="submit">
</form>

<?php
if($dob != ""){
    echo "<br>Current Page Output: " . $dob;
}
?>

</body>
</html>