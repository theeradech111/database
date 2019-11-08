<?php
      include('h.php');

                include('connect.php');

                $query = "SELECT * FROM tb_user ORDER BY u_id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $query);
                echo ' <table class="table table-hover">';
                    echo "
                      <tr bgcolor='#E59866'>
                      <td>UserID</td>
                      <td>Username</td>
                      <td>Firstname</td>
                      <td>Lastname</td>
                      <td>Address</td>
                      <td>Phone</td>
                      <td>Rank</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>";

                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["u_id"] .  "</td> ";
                    echo "<td>" .$row["id_name"] .  "</td> ";
                    echo "<td>" .$row["u_name"] .  "</td> ";
                     echo "<td>" .$row["u_lastname"] .  "</td> ";
                      echo "<td>" .$row["u_abode"] .  "</td> ";
                      echo "<td>" .$row["u_phone"] .  "</td> ";
                      echo "<td>" .$row["rank"] .  "</td> ";
                    echo "<td><a href='edit_form_user.php? u_id=$row[0]' class='btn btn-primary'>แก้ไข</a></td> ";
                    echo "<td><a href='delete_user.php? u_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                mysqli_close($con);
                ?>
