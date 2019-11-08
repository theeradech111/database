<?php
      include('h_index.php');

                include('connect.php');

                $sql = "SELECT * FROM tb_camera WHERE c_status IN ('In stock') ORDER BY c_id ASC" or die("Error:" . mysqli_error());
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
?>
<table style="margin:0px" width="300" height="300" >
  <tr>
    <td height="169">
    <form id="form1" align="center" name="form1" method="post" action="">
      <img src="9377821.jpg" width="200" height="200" alt="">
      <br>
      <h4 ><?php echo $row["c_brand"] ?> :
      <?php echo $row["c_gen"] ?> </h4>
      <h4 class="text-danger"><?php echo $row["c_price"] ?> THB/DAY </h4>
    </form>
      <form id="form2" align="center" name="form2" method="post" action="login_form_user.php">
        <input   type="submit" name="login_Form_user.php" class="btn-info btn-sm" id="button" value="เช่า" />
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
<?php }
?>
