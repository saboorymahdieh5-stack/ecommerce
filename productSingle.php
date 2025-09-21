<?php

//include("model/modelProduct.php");
$id=$GLOBALS['urlArray'][3];
// $product=factory::factory("product");
// $category=factory::factory("category");
$integer=(int)$id;
$product1=product::select("*")->from()->get();
$result1=$product1->fetch_assoc();
$categoryTitle=category::find($result1["category"]);
// die($categoryTitle);
// $result=$categoryTitle->fetch_assoc();
// var_dump($result1['catgeory']);
// var_dump($result['category']);
echo $result1['id']."</br>";
echo $result1['name']."</br>";
echo $result1['price']."</br>";
echo $categoryTitle['name']."</br>";
echo $result1['description']."</br>";
