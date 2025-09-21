<?php 
//include("model/modelCategory.php");
$id=$GLOBALS['urlArray'][3];
// $category=factory::factory("category");
$integer=(int)$id;
$category1=category::find($integer);
// $result1=$category1->fetch_assoc();

?>
<form action="http://localhost/ecommerce/updateCategory/<?=$GLOBALS['urlArray'][3]?>" method="post">
    <input type="text" name="name" value="<?= $category1['name'];?>">
    <input type="text" name="description" value="<?= $category1['description'];?>">
    <button>update</button>
</form>
