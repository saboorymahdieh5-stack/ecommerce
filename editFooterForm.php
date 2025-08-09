<?php 
//include('autoload/autoload.php');

//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelFooter");
$conn=factory::test("modelFooter");
$result=$conn->find($id);
$footer=$result->fetch_assoc();
?>
<form action="../updateFooterForm.php" method="post">
    <input type="hidden" name="id" value="<?php echo $footer['id'];?>" >
    <input type="text" name="nameDesigner" value="<?php echo $footer['nameDesigner'];?>">
    <input type="text" name="phonNumber" value="<?php echo $footer['phonNumber'];?>">
    <input type="text" name="description" value="<?php echo $footer['description'];?>">
    <button type="submit">SEND</button>
</form>