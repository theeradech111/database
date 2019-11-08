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
      <form class="form-inline " action="search_name_page.php">
        <input  class="form-control mr-sm-2" method="GET" name="keyword" type="search" placeholder="Username or Name or Lastname" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
    <div class="col-md6">
      <p></p>
    <?php include('search_name.php'); ?>
  </div>
  </body>
</html>
