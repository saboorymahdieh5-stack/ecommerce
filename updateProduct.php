<?php 
// $_POST["id"]=$GLOBALS['urlArray'][4];
$id=$GLOBALS['urlArray'][4];
// $product=factory::factory("product");
$integer=(int)$id;
// var_dump($integer);
product::update($_POST,$integer);