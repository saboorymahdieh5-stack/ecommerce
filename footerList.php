<?php

// $modelFooter=factory::factory("footer");
$result=footer::select(["id","nameDesigner","phonNumber","description"])->from()->get();
// var_dump($result);
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
 <a href="http://localhost/tamrinb/ecommerce1/deleteFooterForm/<?php echo $footer['id']?>" style=" width:80px;height:20px;background-color:#DBA520;margin-top:10px;margin-left:10px;float:left;">
 حذف
 </a>
 <a href="http://localhost/tamrinb/ecommerce1/footerSingle/<?php echo $footer['id']?>" style=" width:80px;height:20px;background-color:#DBA520;margin-top:10px;margin-left:10px;float:left;">
نمایش
 </a>
 <a href="http://localhost/tamrinb/ecommerce1/editFooterForm/<?php echo $footer['id']?>" style=" width:80px;height:20px;background-color:#DBA520;margin-top:10px;margin-left:10px;float:left;">
 ویرایش
 </a>

 


 <?php 
 }
 ?>
 </div>
</div>