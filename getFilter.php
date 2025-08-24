<?php 
if($_POST["filter"]=="withProduct"){
    // echo "lanbjd";
$result=category::select(["category.id","category.name","category.description"])->from("category")->join("product",["category"=>["name","category"]])->get();
// var_dump($result);
// die();
while($row=$result->fetch_assoc()){
    ?>
    <div>
        <div>
            <?php echo $row['id'];?>
</div>
  <div>
            <?php echo $row['name'];?>
</div>
  <div>
            <?php echo $row['description'];?>
</div>
</div>
<?php
}
}else{
$result1=category::select(["id","name","description"])->where(["pro_count"=>["name","category"]])->subCount("product","pro_count")->from("category")->having(["product.name"],0)->get();
while($row1=$result1->fetch_assoc()){
// var_dump($row1);
if($row1["pro_count"]==0){
    ec+ho $row1['id'];
    echo $row1['name'];
    echo $row1['description'];


}
}

}
?>