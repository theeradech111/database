<?php
include('connect.php');
$sql="SELECT * FROM tb_camera";
$result=mysqli_query($con,$sql);
if(isset($_POST["add_product"]))
{
  if(isset($_SESSION["shopping_cart"]))
    {
      $item_array_id = array_column($_SESSION["shopping_cart"],"item_id");
      if(!in_array($_GET["id"],$item_array_id))
      {
        $count = count($_SESSION["shopping_cart"]);
        $item_array = array(
          'item_id' => $_GET['c_id']

        );
        $_SESSION["shopping_cart"][$count]= $item_array;

      }
    }
    else {
      echo '<script>alert("สินค้าถูกเพิ่มแล้ว")</script>';
    }
}


 ?>
