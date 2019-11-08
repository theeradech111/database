<?php
session_start();
        if(isset($_POST['id_name'])){
                  include("connect.php");
                  $Username =($_POST['id_name']);
                  $Password =($_POST['id_pass']);
                  $sql="SELECT * FROM tb_user Where id_name='".$Username."' and id_pass='".$Password."' ";

                  $result = mysqli_query($con,$sql);

                  if(mysqli_num_rows($result)==1){
						         $row = mysqli_fetch_array($result);
                          $_SESSION["Username"] = $row["id_name"];
						               $_SESSION["User"] = $row["u_name"];
						               $_SESSION["Userlevel"] = $row["rank"];


                      if($_SESSION["Userlevel"]=="admin"){
                        Header("Location: index_admin.php");

                      }

                      if ($_SESSION["Userlevel"]=="member"){
                        Header("Location: index_member.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: form.php");

        }
?>
