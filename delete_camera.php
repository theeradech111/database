<meta charset="UTF-8">
<?php
include('connect.php');
	$result = $_GET["c_id"];
	$sql = "DELETE FROM tb_camera WHERE c_id='$result'";

	$query = mysqli_query($con,$sql);



	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('delete Succesfuly');";
	echo "window.location = 'camera_list.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to delete again');";
	echo "window.location = 'camera_list.php';";
	echo "</script>";
}
mysqli_close($conn);
?>
