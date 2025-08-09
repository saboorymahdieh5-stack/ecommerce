<?php
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelCategory");
$conn=factory::test("modelCategory");
$conn->create($_POST);
?>
