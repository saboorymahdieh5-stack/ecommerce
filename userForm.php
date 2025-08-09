<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelUser");
$conn=factory::test("modelUser");
?>
<form action="http://localhost/ecommerce/getUserForm" method="post">
    <input type="text" name="name" placeholder="NAME PRODUCT">
    <input type="text" name="family" placeholder="PRICE PRODUCT">
    <input type="text" name="phonNumber" placeholder="CATEGORY PRODUCT">
    <button type="submit">save</button>
</form>