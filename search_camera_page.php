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
      <input  class="form-control mr-sm-2" method="GET" name="keyword" type="search" placeholder="Brand or Modal or Customer" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <p></p>
      <div class="col-md6">
        <a href="register_form_camera.php" class="btn-info btn-sm">add</a>
        <p></p>
        <?php include('search_camera.php'); ?>
      </div>
    </div>
  </div>
  </body>
</html>
