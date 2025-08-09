<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelUser");
$conn=factory::test("modelUser");
$result=$conn->select();
?>
<div style="width:1300px;height:400px;margin-top:10px;margin-left:10px;">
 <?php   while($user=$result->fetch_assoc()){ ?>

    <div style="width:300%;height:150px;background-color:#FC6600;margin-top:10px;">
        <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $user['id']; ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $user['name']; ?>
 </div>

            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $user['family']; ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $user['phonNumber']; ?>
 </div>
 <a href="http://localhost/ecommerce/deleteUserForm/<?php echo $user['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
 حذف
 </a>
 <a href="http://localhost/ecommerce/userSingle/<?php echo $user['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
نمایش
 </a>
 <a href="http://localhost/ecommerce/editUserForm/<?php echo $user['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
 ویرایش
 </a>
 
 </div>
 <?php 
 }
 ?>
</div>

        