<?php
              include('h.php');

                include('connect.php');
                  $sql ="SELECT p_brand,p_gen,p_price FROM tb_product WHERE p_user='$Username' ";
                	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
                  echo ' <table class="table table-hover">';
                      echo "
                        <tr bgcolor='#E59866'>
                        <td>Brand</td>
                        <td>Camera Modal</td>
                        <td>Price</td>
                        <td>Remove</td>
                      </tr>";

                    while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                      echo "<td>" .$row["p_brand"] .  "</td> ";
                      echo "<td>" .$row["p_gen"] .  "</td> ";
                      echo "<td>" .$row["p_price"] .  "</td> ";
                      echo "<td><a href='delete_shop.php? p_gen=$row[1]' onclick=\"return confirm('Do you want to remove? !!!')\" class='btn btn-danger btn-xs'>remove</a></td> ";
                    echo "</tr>";
                    }
                  echo "</table>";
                  mysqli_close($con);
                  ?>
