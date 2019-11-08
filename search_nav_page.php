<html>
<head>
<?php
include('h_index.php');
    include('connect.php');
  ?>
<head>
  <body>
    <div class="container">
  <?php include('nav.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-2">
        <?php include('leftmenu.php');?>
      </div>
      <p></p>
      <div class="col-md6">
        <p></p>
        <?php
          $strkeyword = $_GET["keyword"];

          $query = "SELECT * FROM tb_camera WHERE c_brand LIKE '%".$strkeyword."%' OR c_gen LIKE '%".$strkeyword."%' ";
          $result = mysqli_query($con, $query);
          while($row = mysqli_fetch_array($result)){
        ?>
        <table  width="300" height="300" >
          <tr>
            <td height="169">
            <form id="form1" align="center" name="form1" method="post" action="">
              <img src="9377821.jpg" width="200" height="200" alt="">
              <br>
              <h4 ><?php echo $row["c_brand"] ?> :
              <?php echo $row["c_gen"] ?> </h4>
              <h4 class="text-danger"><?php echo $row["c_price"] ?> /วัน </h4>
            </form>
              <form id="form2" align="center" name="form2" method="post" action="add_in_store.">
                <input  type="submit" name="button"  class="btn-info btn-sm" id="button" value="เช่า" />
              </form>
            <p>&nbsp;</p></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?php } ?>
  </body>
</html>
