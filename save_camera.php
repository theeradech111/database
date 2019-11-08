<?php
include('connect.php');
$sql = "UPDATE tb_camera SET c_brand = '".$_POST["txtbrand"]."' ,c_gen = '".$_POST["txtgen"]."' ,c_status = '".$_POST["txtstatus"]."' ,c_price = '".$_POST["txtprice"]."' ,c_des = '".$_POST["txtdes"]."' WHERE c_id = '".$_POST["txtidd"]."' ";

$query = mysqli_query($con,$sql);
	mysqli_close($con);
	if($query) {
		echo "<script type='text/javascript'>";
		echo "alert('update successfuly');";
		echo "window.location = 'camera_list.php';";
		echo "</script>";

}
?>
