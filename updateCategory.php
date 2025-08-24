<?php 
// $_POST["id"]=$GLOBALS['urlArray'][4];
$id=$GLOBALS['urlArray'][4];
// $category=factory::factory("category");
$integer=(int)$id;
// var_dump($integer);
category::update($_POST,$integer);
?>