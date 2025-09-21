<?php 
$id=$GLOBALS['urlArray'][3];
$integer=(int)$id;
$category1=category::find($integer);
echo $category1['id']."</br>";
echo $category1['name']."</br>";
echo $category1['description']."</br>";
?>