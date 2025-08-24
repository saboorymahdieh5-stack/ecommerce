<?php 

//include("model/modelCategory.php");

// $id=$_POST['id'];
$id=$GLOBALS['urlArray'][4];
// $category=factory::factory("category");
$integer=(int)$id;
category::delete($integer);