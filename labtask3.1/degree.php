<!DOCTYPE html>
<html>
<body>

<?php
$degree = [];

if(isset($_POST['degree'])){
    $degree = $_POST['degree'];

    echo "Handler Output:<br>";
    foreach($degree as $d){
        echo $d . "<br>";
    }
}
?>

<br><br>

<form method="post">
  <input type="checkbox" name="degree[]" value="SSC"
  <?php if(in_array("SSC",$degree)) echo "checked"; ?>> SSC

  <input type="checkbox" name="degree[]" value="HSC"
  <?php if(in_array("HSC",$degree)) echo "checked"; ?>> HSC

  <input type="submit">
</form>

<?php
if(!empty($degree)){
    echo "<br>Current Page Output:<br>";
    foreach($degree as $d){
        echo $d . "<br>";
    }
}
?>

</body>
</html>