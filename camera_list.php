<html>
<head>
<?php include('h.php');?>
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
    <form style="float:right;" class="form-inline " action="search_camera_page.php">
      <input size="30" class="form-control mr-sm-2" method="GET" name="keyword" type="search" placeholder="Brand or Modal or Customer" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <p></p>
      <div class="col-md6">
        <a href="register_form_camera.php" class="btn-info btn-sm">add</a>
        <a href="camera_list_instock_page.php" class="btn-info btn-sm">In stock</a>
        <a href="camera_list_outstock_page.php" class="btn-info btn-sm">Out stock</a>
        <p></p>
        <?php include('list_camera.php'); ?>
      </div>
    </div>
  </div>
  </body>
</html>
