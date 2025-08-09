<?php 
include('autoload/autoload.php');
include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelUser");
$conn=factory::test("modelUser");
$conn->update($_POST);
?>