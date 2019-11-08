<?php include('h.php');?>
<?php
  include('connect.php');
	$str = mysqli_real_escape_string($con,$_GET['u_id']);

	$sql = "SELECT * FROM tb_user WHERE u_id = '$str' ";
 	$query= mysqli_query($con, $sql);
 	$result=mysqli_fetch_array($query);
	extract($result);
?>
<form  name="edit_user" action="save_user.php" method="POST" class="form-horizontal">
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>UserID</p>
            <input  name="txtid" type="text" value="<?php echo $result["u_id"]; ?>" disabled='disabled' />
            <input type="hidden" name="txtidd" value="<?php echo $result["u_id"]; ?>" />
          </div>
      </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>UserName</p>
            <input type="text" name="txtname"   value="<?php echo $result["id_name"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Password</p>
            <input name="txtpass" type="password"  value="<?php echo $result["id_pass"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Firstname</p>
            <input name="txtuname" type="text"   value="<?php echo $result["u_name"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Lastname</p>
            <input name="txtlastname" type="text"   value="<?php echo $result["u_lastname"];?>"></td>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Address</p>
            <input name="txtabode" type="text"   value="<?php echo $result["u_abode"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <p>Phone</p>
            <input name="txtphone" type="text"   value="<?php echo $result["u_phone"];?>">
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> save</button>
          </div>
      </div>
      </form>
