<?php
include('connect.php');
	$id_name = $_POST["id_name"];
	$id_pass = $_POST["id_pass"];
	$u_name = $_POST["u_name"];
	$u_lastname = $_POST["u_lastname"];
	$u_abode = $_POST["u_abode"];
	$u_phone = $_POST["u_phone"];

	$sql = "INSERT INTO tb_user (id_name,id_pass,u_name,u_lastname,u_abode,u_phone)
			VALUES('$id_name','$id_pass','$u_name','$u_lastname','$u_abode','$u_phone')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

	mysqli_close($con);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'login_Form_user.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>
