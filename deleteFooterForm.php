<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelFooter"); 
$conn=factory::test("modelFooter");
$conn->delete($id);
?>