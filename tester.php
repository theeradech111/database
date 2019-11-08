<?php
      include('h.php');
      include('connect.php');
      $p_id = $_POST["c_id"];

	$sql = "INSERT INTO tb_product (p_id) VALUES ('$p_id') ";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
  echo ' <table class="table table-hover">';
      echo "
        <tr bgcolor='#D6DBDF'>
        <td>CameraID</td>
        <td>Brand</td>
        <td>Generation</td>
        <td>Price</td>
        <td>Description</td>
        <td>Edit</td>
        <td>Delete</td>

      </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>" .$row["p_id"] .  "</td> ";
      echo "<td>" .$row["p_brand"] .  "</td> ";
      echo "<td>" .$row["p_gen"] .  "</td> ";
      echo "<td>" .$row["p_price"] .  "</td> ";
      echo "<td>" .$row["p_des"] .  "</td> ";
      echo "<td><a href='edit_form_camera.php?c_id=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
      echo "<td><a href='delete_camera.php?c_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
  }
  echo "</table>";
  mysqli_close($con);
  ?>
