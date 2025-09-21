<?php 
//include("model/modelUser.php");

$id=$GLOBALS['urlArray'][3];
// $user=factory::factory("user");
$integer=(int)$id;
user::where("id","=",$integer)->delete($integer);
