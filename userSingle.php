<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']    ->test("modelUser");
$conn=factory::test("modelUser");
$result=$conn->find($id);

while($user=$result->fetch_assoc()){
?>
<div style="width:500px;height:200px;background-color:yellowgreen;margin-top:10px;">
    <div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
        <?php echo $user['id']; ?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $user['name'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $user['family'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $user['phonNumber'];?>
</div>
<?php 
}
?>
</div>

