<?php 
//include("model/modelCategory.php");
$id=$GLOBALS['urlArray'][4];
// $category=factory::factory("category");
$integer=(int)$id;
$category1=category::find($integer);
// $result1=$category1->fetch_assoc();

?>
<form action="http://localhost/tamrinb/ecommerce1/updateCategory/<?=$GLOBALS['urlArray'][4]?>" method="post">
    <input type="text" name="title" value="<?= $category1['title'];?>">
    <input type="text" name="description" value="<?= $category1['description'];?>">
    <button>update</button>
</form>
