<?php 
//include("model/modelUser.php");

$id=$GLOBALS['urlArray'][4];
// $user=factory::factory("user");
$integer=(int)$id;
user::delete($integer);