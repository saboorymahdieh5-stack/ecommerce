<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelFooter");
$conn=factory::test("modelFooter");
$result=$conn->find($id);

while($footer=$result->fetch_assoc()){
?>
<div style="width:500px;height:200px;background-color:yellowgreen;margin-top:10px;">
    <div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
        <?php echo $footer['id']; ?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $footer['nameDesigner'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $footer['phonNumber'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $footer['description'];?>
</div>
<?php 
}
?>
</div>

