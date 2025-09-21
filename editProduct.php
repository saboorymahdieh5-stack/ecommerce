<?php 
$id=$GLOBALS['urlArray'][3];
$integer=(int)$id;
$product1=product::find($integer);
$category1=category::select(["name"]);

?>
<form action="http://localhost/ecommerce/updateProduct/<?=$GLOBALS['urlArray'][3]?>" method="post">
    <input type="text" name="name" value="<?= $product1['name'];?>">
    <input type="number" name="price" value="<?= $product1['price'];?>">
    <input type="text" name="description" value="<?= $product1['description'];?>">
    
    <select name='category'>
        <?php 
        for($i=0;$i<$category1->num_rows;$i++){
            $categoryTitle=$category1->fetch_assoc();
            ?>
            <option value="<?php echo $categoryTitle[1]?>">
                <?php echo $categoryTitle[1];?>
        </option>
        <?php 
        }
        ?>
        </select>
        <button>✅</button>
</form>

