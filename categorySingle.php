<?php 

//include("model/modelCategory.php");
$id=$GLOBALS['urlArray'][4];
// $category=factory::factory("category");
$integer=(int)$id;
$category1=category::find($integer);
// $result=$category1->fetch_assoc();
// var_dump($result);
echo $category1['id']."</br>";
echo $category1['title']."</br>";
echo $category1['description']."</br>";
?>