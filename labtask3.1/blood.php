<!DOCTYPE html>
<html>
<body>

<?php
$blood = "";

if(isset($_POST['blood'])){
    $blood = $_POST['blood'];
    echo "Handler Output: " . $blood;
}
?>

<br><br>

<form method="post">
  <select name="blood">
    <option value="A+" <?php if($blood=="A+") echo "selected"; ?>>A+</option>
    <option value="B+" <?php if($blood=="B+") echo "selected"; ?>>B+</option>
  </select>
  <input type="submit">
</form>

<?php
if($blood != ""){
    echo "<br>Current Page Output: " . $blood;
}
?>

</body>
</html>