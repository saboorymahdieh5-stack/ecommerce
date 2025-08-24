<?php

// include("model/modelUser.php");
$id=$GLOBALS['urlArray'][4];
// $user=factory::factory("user");
$integer=(int)$id;
$user1=user::find($integer);
// $result=$user1->fetch_assoc();
echo $user1['id']."</br>";
echo $user1['name']."</br>";
echo $user1['family']."</br>";
echo $user1['phonNumber']."</br>";

?>