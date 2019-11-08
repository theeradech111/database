<?php
include('connect.php');

	$c_brand = $_POST["c_brand"];
	$c_gen = $_POST["c_gen"];
	$c_status = $_POST["c_status"];
	$c_price = $_POST["c_price"];
	$c_des = $_POST["c_des"];

	$sql = "INSERT INTO tb_camera(c_brand,c_gen,c_status,c_price,c_des)
			VALUES('$c_brand','$c_gen','$c_status','$c_price','$c_des')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

	mysqli_close($con);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'camera_list.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>
