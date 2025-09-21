<?php 

// $category=factory::factory("category");
// $category=factory::getInstance("category");
$result=category::select("*")->count1("pro_count");
// $result=category::select("*")->resultNull()->get();
// $result=category::select("*")->from()->get();
// $result=category::with("category")->get();

?>

<div>
    <?php
for($i=1;$i<=$result->num_rows;$i++){
    $category=$result->fetch_assoc();
    // var_dump($category);
    ?>
    <div>
     <div>
    <?php echo $category['id'];?>
</div>
<div>
    <?php echo $category['name'];?>
</div>
<div>
    <?php echo $category['description'];?>
</div>

<div>
    <?php 
    echo $category['pro_count'];
    ?>
</div>
 <div>
    <?php 
    // echo $category['pro_name'];
    ?>
</div>

<a href="http://localhost/ecommerce/deleteCategory/<?php echo $category['id']?>">
 حذف
 </a>
 <a href="http://localhost/ecommerce/categorySingle/<?php echo $category['id']?>">
نمایش
 </a>
 <a href="http://localhost/ecommerce/editCategory/<?php echo $category['id']?>">
 ویرایش
 </a>
 <?php 
 }
 ?>
 </div>
</div>
<form action="http://localhost/ecommerce/getFilter" method="post">
<select name="filter">
    <option value="withProduct">withProduct</option>
    <option value="withoutProduct">withoutProduct</option>
</select>
<button>show</button>
</form>