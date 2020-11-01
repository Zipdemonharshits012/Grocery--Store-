<?php require_once("../resources/config.php");?>

<?php

  session_start();
  if(isset($_POST['deletebutton'])){
      $cid = $_SESSION['cid'];
      $pid = $_POST["pid"];
      $query = "DELETE FROM `cart` WHERE `cartid` = '$cid' AND `pid` = '$pid'";
      $queryrun = mysqli_query($con , $query);
      header("location: cart.php");
  }


?>
