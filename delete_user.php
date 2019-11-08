<meta charset="UTF-8">
<?php
include('connect.php');
	$result = $_GET["u_id"];
	$sql = "DELETE FROM `tb_user` WHERE u_id='$result'";

	$query = mysqli_query($con,$sql);



	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'member_list.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "window.location = 'select_user.php';";
	echo "</script>";
}
mysqli_close($conn);
?>
