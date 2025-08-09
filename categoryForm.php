<?php 
//include('autoload/autoload.php');

//include("model/factory.php");
$conn=factory::test("modelCategory");
?>

<form action="http://localhost/ecommerce/getCategoryForm" method="post">
    <input type="text" name="title" placeholder="TITLE CATEGORY">
    <input type="text" name="description" placeholder="DESCRIPTION">
    <button type="submit" > save</button>
</form>
    