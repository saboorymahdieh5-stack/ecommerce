<?php 
//include("autoload/autoload.php");
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelCategory");
$conn=factory::test("modelCategory");
$result=$conn->find($id);

while($category=$result->fetch_assoc()){
?>
<div style="width:500px;height:200px;background-color:yellowgreen;margin-top:10px;">
    <div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
        <?php echo $category['id']; ?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $category['title'];?>
</div>
<div style="width:100px;height:80px;background-color:green;margin-top:10px;float:left;">
    <?php echo $category['description'];?>
</div>
<?php 
}
?>
</div>