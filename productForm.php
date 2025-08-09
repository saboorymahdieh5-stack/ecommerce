hb<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
//$conn=$GLOBALS['newFactory']->test("modelCategory");
$conn=factory::test("modelCategory");
$result=$conn->select();


?>
<form action="http://localhost/ecommerce/getProductForm " method="post">
    <input type="text" name="name" placeholder="NAME PRODUCT">
    <input type="text" name="price" placeholder="PRICE PRODUCT">
    <select name="category">
     <?php while($category=$result->fetch_assoc()){?>
        <option value="<?= $category['id'] ?>">
            <?=$category['title'];?>
     </option>
     <?php
     }
     ?>
     </select>
    <input type="text" name="description" placeholder="DESCRIPTION PRODUCT">
    <button type="submit">save</button>
</form>