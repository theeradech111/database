<?php include('h.php');?>
<?php
  include('connect.php');
	$str = mysqli_real_escape_string($con,$_GET['c_id']);

	$sql = "SELECT * FROM tb_camera WHERE c_id = '$str' ";
 	$query= mysqli_query($con, $sql);
 	$result=mysqli_fetch_array($query);
	extract($result);
?>
<form  name="edit_camera" action="save_camera.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>CameraID</p>
            <input type="text" name="txtid" value="<?php echo $result["c_id"]; ?>" disabled='disabled' />
        <input type="hidden" name="txtidd" value="<?php echo $result["c_id"]; ?>" />
          </div>
      </div>

        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Brand</p>
            <td><input type="text" name="txtbrand"   value="<?php echo $result["c_brand"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Generation</p>
            <input name="txtgen" type="text"  value="<?php echo $result["c_gen"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Status</p>
            <select name="txtstatus"  value="<?php echo $result["c_status"];?>">
               <option value="Out of Stock">Out of Stock</option>
               <option value="In stock">In stock</option>

             </select>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Price</p>
            <input name="txtprice" type="text"   value="<?php echo $result["c_price"];?>"></td>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Description</p>
            <td><input name="txtdes" type="text"   value="<?php echo $result["c_des"];?>"></td>
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"> save</button>
          </div>
      </div>
      </form>
