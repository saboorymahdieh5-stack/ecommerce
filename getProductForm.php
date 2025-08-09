<?php
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelProduct");
$conn=factory::test("modelProduct");
$result=$conn->create($_POST);
?>