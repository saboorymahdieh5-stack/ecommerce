<!DOCTYPE html>
<html>
<head>
    </head>
    <body>
    <?php 
      //include("model/modelCategory.php");
      // $category=factory::factory("category");
      // var_dump($category);
      $result = category::select("*")->from()->get();
    //   echo $result -> num_rows ;
      // var_dump($result);
      ?>
    <form action="http://localhost/ecommerce/getProductForm" method="post">
        <input type="text" name='name'>
        <input type="text" name='price'>
        <!-- <input type="text" name='category'> -->
        <input type="text" name='description'>

        <select name="category">
            <?php 
            for($i = 0; $i < $result -> num_rows ; $i++){
                $categorytitle = $result -> fetch_assoc();
                // echo $categorytitle;
                ?>
                <option value="<?=$categorytitle['id'];?>">
                    <?= $categorytitle['name'];?>
                </option>
            <?php
            }
            ?>
            </select>
        <button>send</button>
</form>
</body>
</html>