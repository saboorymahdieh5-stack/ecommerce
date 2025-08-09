<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelFooter");
$conn=factory::test("modelFooter");
$result=$conn->select();
?>
<div style="width:1300px;height:400px;margin-top:10px;margin-left:10px;">
 <?php   while($footer=$result->fetch_assoc()){ ?>

    <div style="width:100%;height:50px;background-color:#FC6600;margin-top:10px;">
        <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $footer['id']; ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $footer['nameDesigner']; ?>
 </div>

            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $footer['phonNumber']; ?>
 </div>

            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $footer['description']; ?>
 </div>
 <a href="http://localhost/ecommerce/deleteFooterForm/<?php echo $footer['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
 حذف
 </a>
 <a href="http://localhost/ecommerce/footerSingle/<?php echo $footer['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
نمایش
 </a>
 <a href="http://localhost/ecommerce/editfooterForm/<?php echo $footer['id']?>" style=" width:100px;height:80px;background-color:#DBA520;padding:10px;margin-top:10px;">
 ویرایش
 </a>
 <?php 
 }
 ?>
 </div>
</div>

        