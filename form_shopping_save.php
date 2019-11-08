<?php
              include('h.php');

                include('connect.php');
                $gen = $_POST['txtgen'];
                $sql ="INSERT INTO tb_product (p_gen,p_user) VALUES ('$gen','$User') ";
                $str ="UPDATE tb_camera SET c_status='Out of stock' WHERE c_gen ='$gen'";
                $str1 ="UPDATE tb_camera SET c_user='$User' WHERE c_gen ='$gen'";
                	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
                  $result = mysqli_query($con, $str) or die ("Error in query: $sql " . mysqli_error($con));
                    $result = mysqli_query($con, $str1) or die ("Error in query: $sql " . mysqli_error($con));

                	mysqli_close($con);

                	if($result){
                	echo "<script type='text/javascript'>";
                	echo "alert('add camera Succesfuly');";
                	echo "window.location = 'all_list_member.php'; ";
                	echo "</script>";
                	}
                	else{
                	echo "<script type='text/javascript'>";
                	echo "alert('Error back to register again');";
                	echo "</script>";
                }
                ?>
