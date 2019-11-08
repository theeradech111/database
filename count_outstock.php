<?php
include('connect.php');
$query = "SELECT * FROM tb_camera WHERE c_status IN ('Out of stock')";
$result = mysqli_query($con, $query);
$rowcount=mysqli_num_rows($result);
  ?>
