<?php 

//include("model/modelProduct.php");
$id=$GLOBALS['urlArray'][3];
// var_dump($id);
// $product=factory::factory("product");
// var_dump("id");
$integer=(int)$id;
// var_dump($integer);
product::where("id","=",$integer)->delete($integer);


