<?php
  include('h.php');
  include('connect.php');
?>
<form  style="margin-left:30px" width="500" name="close" action="form_shopping_save.php" method="post" class="form-horizontal">
        <h2 center>Add to cart</h2>
        <div class="form-group">
          <div  class="col-sm-5" align="center">
            <td><input placeholder="Enter the camera model you want." type="text" name="txtgen" required="required" size="60" >
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn">Add</button>
          </div>
      </div>
    </form>
