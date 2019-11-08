<html>
<head>
<?php include('h.php');?>
<?php include('count_instock.php');?>
<head>
  <body>
    <div class="container">
  <?php include('nav_admin.php');?>
  <p></p>
    <div class="row">
      <div class="col-md-3">
        <?php include('left_menu_admin.php');?>
      </div>
    </div>
    <p></p>
    <div class="col-md6">
      <a href="register_form_camera.php" class="btn-info btn-sm">add</a>
      <a href="camera_list_instock_page.php" class="btn-info btn-sm">In stock</a>
      <a href="camera_list_outstock_page.php" class="btn-info btn-sm">Out stock</a>
      <input type="text"  name="" value="Instock=<?php echo $rowcount?>" disabled=disabled></input>
      <p></p>
    <?php include('camera_list_instock.php'); ?>
  </div>
  </body>
</html>
