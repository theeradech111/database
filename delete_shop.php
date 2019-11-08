<?php
              include('h.php');

                include('connect.php');
                $gen = $_GET["p_gen"];

              	$sql = "DELETE FROM tb_product WHERE p_gen='$gen'";
                $str = "UPDATE tb_camera SET c_status='In stock' WHERE c_gen='$gen'";
                $str1 = "UPDATE tb_camera SET c_user='' WHERE c_gen='$gen'";

              	$query1 = mysqli_query($con,$str)or die ("Error in query: $sql " . mysqli_error($con));
                $query = mysqli_query($con,$sql)or die ("Error in query: $sql " . mysqli_error($con));
                $query2 = mysqli_query($con,$str1)or die ("Error in query: $sql " . mysqli_error($con));

                if($query1){
              	echo "<script type='text/javascript'>";
              	echo "alert('Romove Succesfuly');";
              	echo "window.location = 'show_shopping_page.php'; ";
              	echo "</script>";
              	}

              	else{
              	echo "<script type='text/javascript'>";
              	echo "alert('Error back to remove again');";
              	echo "window.location = 'show_shopping_page.php';";
              	echo "</script>";
              }
              mysqli_close($conn);
              ?>
