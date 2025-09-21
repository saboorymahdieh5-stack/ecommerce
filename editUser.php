<?php 
// include("model/modelUser.php");
$id=$GLOBALS['urlArray'][3];
// $user=factory::factory("user");
$integer=(int)$id;
$user1=user::find($integer);
// $result1=$user1->fetch_assoc();

?>
<form action="http://localhost/ecommerce/updateUser/<?=$GLOBALS['urlArray'][3]?>" method="post">
    <input type="text" name="name" value="<?= $user1['name'];?>">
    <input type="text" name="family" value="<?= $user1['family'];?>">
    <input type="text" name="phonNumber" value="<?= $user1['phonNumber'];?>">
    <button>update</button>
</form>
