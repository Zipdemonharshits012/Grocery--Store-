<?php $con = mysqli_connect("localhost","root","","GroceryStore");

require_once("functions.php");
if(!$con){
  echo "Database not connected !!!";
}
?>
