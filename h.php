<?php
 if(!isset($_SESSION)) {
session_start();
include("connect.php");
  $Username = $_SESSION["Username"];
  $User = $_SESSION["User"];
 $rank = $_SESSION["Userlevel"] ;
}?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>เช่ากล้องออนไลน์</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
