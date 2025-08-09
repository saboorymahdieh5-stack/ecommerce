<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelProduct");
$conn=factory::test("modelProduct");
$result=$conn->find($id);

while($product=$result->fetch_assoc()){
?>
<div style="width:500px;height:300px;background-color:yellowgreen;margin-top:10px;">
    <div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
        <?php echo $product['id']; ?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $product['name'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $product['price'];?>
</div>

<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $product['category'];?>
</div>

<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $product['description'];?>
</div>
<?php 
}
?>
</div>

