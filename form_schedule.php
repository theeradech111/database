<?php
  include('connect.php');
?>
<form   width="500" name="close" action="time.php" method="get" class="form-horizontal">
        <h1>close product</h1>
        <div class="form-group">
          <div  class="col-sm-5" align="center">
            <p>date(ex: 2019-12-31)</p>
            <td><input type="text" name="txtdate" required="required" size="60" >
          </div>
        </div>
        <div  class="form-group">
          <div  class="col-sm-5" align="right">
            <p>time(ex: 10:07:00.000000)</p>
            <input name="txttime" type="text" required="required" size="60">
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn">SET</button>
          </div>
      </div>
    </form>
