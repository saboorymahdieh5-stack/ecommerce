<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id=$GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelCategory");
$conn=factory::test("modelCategory");
$result=$conn->find($id);
$category=$result->fetch_assoc();
?>
<form action="http://localhost/ecommerce/updateCategoryForm" method="post">
    <input type="hidden" name="id" value="<?php echo $category['id'];?>" >
    <input type="text" name="title" value="<?php echo $category['title'];?>">
    <input type="text" name="description" value="<?php echo $category['description'];?>">
    <button type="submit">SEND</button>
</form>