<?php 
    $sort=$_POST["sort"];
//     var_dump($_POST);
//     die();
    // $value=$_POST["price"];
$result=product::select("product.*")->from()->orderBy($sort)->get();
while($sort=$result->fetch_assoc()){
?>
<div>
    <div>
        <?php echo $sort['id'];?>
</div>
  <div>
        <?php echo $sort['name'];?>
</div>
  <div>
        <?php echo $sort['price'];?>
</div>
  <div>
        <?php echo $sort['category'];?>
</div>
  <div>
        <?php echo $sort['description'];?>
</div>
</div>
<?php
}
?>