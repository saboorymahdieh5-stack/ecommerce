<?php 
$id=$GLOBALS['urlArray'][3];
// var_dump($id);
// $modelFooter=factory::factory("footer");
$integer=(int)$id;
$result=footer::find($integer);
// var_dump($result);
// $footer=$result->fetch_assoc();
?>
<form action="http://localhost/ecommerce/updateFooterForm/<?=$GLOBALS['urlArray'][3]?>" method="post">
    <input type="text" name="nameDesigner" value="<?php echo $result['nameDesigner'];?>">
    <input type="text" name="phonNumber" value="<?php echo $result['phonNumber'];?>">
    <input type="text" name="description" value="<?php echo $result['description'];?>">
    <button type="submit">SEND</button>
</form>