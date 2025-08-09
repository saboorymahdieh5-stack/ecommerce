<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelProduct");

$conn=factory::test("modelProduct");
$result=$conn->select();
?>
<div style="width:1300px;height:400px;margin-top:10px;margin-left:10px;">
 <?php   while($product=$result->fetch_assoc()){ ?>

    <div style="width:100%;height:50px;background-color:#FC6600;margin-top:10px;">
        <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $product['id']; ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:20px;float:left;">
            <?php echo $product['name']; ?>
 </div>

            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $product['price']; ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?=$conn->getProductCategoryTitle(); ?>
 </div>
            <div style="width:100px;height:20px;background-color:#F9A602;margin-top:10px;margin-left:10px;float:left;">
            <?php echo $product['description']; ?>
 </div>
 <a href="http://localhost/ecommerce/deleteProductForm/<?php echo $product['id']?>" style=" width:100px;height:60px;background-color:#DBA520;padding:10px;margin-top:15px;">
 حذف
 </a>
 <a href="http://localhost/ecommerce/productSingle/<?php echo $product['id']?>" style=" width:100px;height:60px;background-color:#DBA520;padding:10px;margin-top:15px;">
نمایش
 </a>
 <a href="http://localhost/ecommerce/editProductForm/<?php echo $product['id']?>" style=" width:100px;height:60px;background-color:#DBA520;padding:10px;margin-top:15px;">
 ویرایش
 </a>
 
 </div>
 <?php
 }
 ?>
</div>
<form  action="getProd

        