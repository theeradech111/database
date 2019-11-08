<?php
              include('h.php');

                include('connect.php');

                $brand = $_POST['brand'];
                $gen = $_POST['gen'];
                $price = $_POST['price'];
                $sql ="INSERT INTO tb_product (p_brand,p_gen,p_price,p_user) VALUES ('$brand','$gen','$price','$Username') ";
                $str ="UPDATE tb_camera SET c_status='Out of stock' WHERE c_gen ='$gen'";
                $str1 ="UPDATE tb_camera SET c_user='$Username' WHERE c_gen ='$gen'";
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
