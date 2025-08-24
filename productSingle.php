<?php

//include("model/modelProduct.php");
$id=$GLOBALS['urlArray'][4];
// $product=factory::factory("product");
// $category=factory::factory("category");
$integer=(int)$id;
$product1=product::where("id",$integer,"=")->get();
$result1=$product1->fetch_assoc();
$categoryTitle=category::find($result+
1["category"]);
// die($categoryTitle);
// $result=$categoryTitle->fetch_assoc();
// var_dump($result1['catgeory']);
// var_dump($result['category']);
echo $result1['id']."</br>";
echo $result1['name']."</br>";
echo $result1['price']."</br>";
echo $categoryTitle['title']."</br>";
echo $result1['description']."</br>";
