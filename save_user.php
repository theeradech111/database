<?php
include('connect.php');
$sql = "UPDATE tb_user SET id_name = '".$_POST["txtname"]."' ,id_pass = '".$_POST["txtpass"]."' ,u_name = '".$_POST["txtuname"]."' ,u_lastname = '".$_POST["txtlastname"]."' ,u_abode = '".$_POST["txtabode"]."' ,u_phone = '".$_POST["txtphone"]."' WHERE u_id = '".$_POST["txtidd"]."' ";

$query = mysqli_query($con,$sql);
	mysqli_close($con);
	if($query) {
		echo "<script type='text/javascript'>";
		echo "alert('update successfuly');";
		echo "window.location = 'member_list.php';";
		echo "</script>";

}
else {
	echo "<script type='text/javascript'>";
	echo "alert('error update');";
	echo "window.location = 'member_list.php';";
	echo "</script>";

}
?>
