<?php
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelFooter");
$conn=factory::test("modelFooter");
$result=$conn->updateOrCreate($_POST);
?>