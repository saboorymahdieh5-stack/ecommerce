<?php 
if($_POST["filter"]=="withProduct"){
    // echo "lanbjd";
$result=category::select("*")->from()->join("product")->get();
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
$result1=category::select("*")->count1("pro_count");
// var_dump($result1);
// die();
while($row1=$result1->fetch_assoc()){
// var_dump($row1);        
if($row1["pro_count"]==0){
    echo $row1['id'];
    echo $row1['name'];
    echo $row1['description'];


}
}

}
?>