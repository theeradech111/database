<?php
  include('connect.php');

  $query = "SELECT * FROM tb_camera WHERE c_status IN ('In stock')";
  $result = mysqli_query($con, $query);
  echo ' <table class="table table-hover">';
      echo "
        <tr bgcolor='#D6DBDF'>
        <td>CameraID</td>
        <td>Brand</td>
        <td>Generation</td>
        <td>Status</td>
        <td>Price</td>
        <td>Description</td>
        <td>Customer</td>
        <td>Edit</td>
        <td>Delete</td>
      </tr>";

    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>" .$row["c_id"] .  "</td> ";
      echo "<td>" .$row["c_brand"] .  "</td> ";
      echo "<td>" .$row["c_gen"] .  "</td> ";
       echo "<td>" .$row["c_status"] .  "</td> ";
        echo "<td>" .$row["c_price"] .  "</td> ";
        echo "<td>" .$row["c_des"] .  "</td> ";
        echo "<td>" .$row["c_user"] .  "</td> ";
      echo "<td><a href='edit_form_camera.php? c_id=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
      echo "<td><a href='delete_camera.php? c_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
    }
  echo "</table>";
  mysqli_close($con);
  ?>
