<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style2.css">
<title>เช่ากล้องออนไลน์</title>
</head>

<body>
<?php
?>
<form enctype="multipart/form-data" name="formRegisterCamera" method="post" action="register_save_camera.php">
  	<div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Register For Camera</div>
      <div class='input-fields'>

        <input type='text' placeholder='Brand' class='input-line full-width' name="c_brand" id="c_brand"  required="required"/></input>
        <input type="text" placeholder='Generation' class='input-line full-width' name="c_gen"  id="c_gen"  required="required"/></input>
        <input type="text" placeholder='Price' class='input-line full-width' name="c_price" id="c_price"   required="required"/> </input>
        <input type='text' placeholder='Decription' class='input-line full-width' name="c_des" id="c_des"  required="required"/></input>
     	 <select name="c_status" class='input-line' id="c_status" required="required" height="50px">
          <option value="Out of Stock">Out of Stock</option>
          <option value="In stock">In stock</option>
        </select>
  </div>
		<div><button class='ghost-round full-width'>Submit</button></div>

</form>
</body>
</html>
