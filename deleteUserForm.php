<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelUser");

$conn=factory::test("modelUser");
$conn->delete($id);
?>