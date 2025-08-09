<?php 
//include('autoload/autoload.php');
//include("model/factory.php");
$id = $GLOBALS['urlArray'][3];
//$conn=$GLOBALS['newFactory']->test("modelProduct");
$conn=factory::test("modelProduct");
$product = $conn -> find($id) -> fetch_assoc();
$result=$conn->editProductCategoryTitle();

?>
<form action="http://localhost/ecommerce/updateProductForm" method="post">
    <input type="hidden"    name="id" value="<?php echo $product['id'];?>">
    <input type="text"      name="name" value="<?php echo $product['name'];?>">
    <input type="text"      name="price" value="<?php echo $product['price'];?>">
    <select                 name="category">
        <?php while($category=$result->fetch_assoc()){ ?>
            <option value="<?= $category['id'];?>" <?php if($product['category'] == $category['id']){echo 'selected';}?>>
                <?= $category['title'];?>
            </option>
        <?php } ?>
    </select>
    <input type="text" name="description" value="<?php echo $product['description'];?>">
    <button type="submit">SEND</button>
</form>