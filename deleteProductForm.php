<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelProduct");
$conn=factory::test("modelProduct");
$conn->delete($id);
?>