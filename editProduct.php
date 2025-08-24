<?php 
$id=$GLOBALS['urlArray'][4];
// $product=factory::factory("product");
// $category=factory::factory("category");
$integer=(int)$id;
$product1=product::find($integer);
// var_dump($product1);
// $result=$product1->fetch_assoc();
$category1=category::select(["title"]);

?>
<form action="http://localhost/tamrinb/ecommerce1/updateProduct/<?=$GLOBALS['urlArray'][4]?>" method="post">
    <input type="text" name="name" value="<?= $product1['name'];?>">
    <input type="number" name="price" value="<?= $product1['price'];?>">
    <input type="text" name="description" value="<?= $product1['description'];?>">
    
    <select name='category'>
        <?php 
        for($i=0;$i<$category1->num_rows;$i++){
            $categoryTitle=$category1->fetch_assoc();
            ?>
            <option value="<?php echo $categoryTitle['title']?>">
                <?php echo $categoryTitle['title'];?>
        </option>
        <?php 
        }
        ?>
        </select>
        <button>✅</button>
</form>

