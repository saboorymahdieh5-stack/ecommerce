<?php 
// $_POST["id"]=$GLOBALS['urlArray'][4];
$id=$GLOBALS['urlArray'][3];
// $product=factory::factory("product");
$integer=(int)$id;
// var_dump($integer);
product::where("id","=",$id)->update($_POST);