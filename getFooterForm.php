<?php
// $id=$GLOBALS['urlArray'][4];
// var_dump($GLOBALS['urlArray']);
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelFooter");
// $modelFooter=factory::factory("footer");
// var_dump($_POST);
// $integer=(int)$id;
$result=footer::updateOrCreate($_POST);
?>