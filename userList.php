<?php 

// $user=factory::factory("user");
$result=user::select("*")->from()->get();
// var_dump($userModel);
?>
<div>
<?php
for($i=1;$i<=$result->num_rows;$i++){
    $user=$result->fetch_assoc();
    ?>
    <div>
     <div>
    <?php echo $user['id'];?>
</div>
<div>
    <?php echo $user['name'];?>
</div>
<div>
    <?php echo $user['family'];?>
</div>
<div>
    <?php echo $user['phonNumber'];?>
</div>
<a href="http://localhost/ecommerce/deleteUser/<?php echo $user['id']?>">
 حذف
 </a>
 <a href="http://localhost/ecommerce/userSingle/<?php echo $user['id']?>">
نمایش
 </a>
 <a href="http://localhost/ecommerce/editUser/<?php echo $user['id']?>">
 ویرایش
 </a>
 <?php 
 }
 ?>
 </div>
</div>
