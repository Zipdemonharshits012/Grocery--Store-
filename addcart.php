
<?php require_once("../resources/config.php");?>

<?php

  session_start();
  if(isset($_POST['add'])){
      $cid = $_SESSION['cid'];
      $qty = $_POST["qty"];
      $pid = $_POST["pid"];
      $query = "SELECT * FROM `product` WHERE pid = '$pid' ";
      $queryrun = mysqli_query($con , $query);
      $row = mysqli_fetch_assoc($queryrun);
      $price = $row['price'];
      $cost = $qty * $price;
      $sql = "INSERT INTO `cart`(`cartid`, `pid`, `quantity`, `cost`) VALUES ('$cid','$pid','$qty','$cost')";
      $result = mysqli_query($con, $sql);
      header("location: cart.php");
  }


?>
