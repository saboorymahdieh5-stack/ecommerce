   <?php 
    // $price=$_POST["price"];
    // $price1= $price;
    if(!empty($_POST)){
      $from=$_POST["from"];
      $to=$_POST["to"];

    }else{
      $from=$GLOBALS['urlArray'][6];
      $to=$GLOBALS['urlArray'][7];

    }
    $product=product::getInstance("product");
    $result=$product->getPrice($from,$to);
    $pageNet=5;
    $pageNumber=$GLOBALS['urlArray'][5];
    $offset=($pageNumber-1)*$pageNet;
    $limit=$pageNet+$offset;
    for($j=$offset;$j<$limit;$j++){
      if(count($result)>$j){
     echo $result[$j]["id"]."</br>";
     echo $result[$j]["name"]."</br>";
     echo $result[$j]["price"]."</br>";
     echo $result[$j]["category"]."</br>";
     echo $result[$j]["description"]."</br>";

    }
  }
    $i=$product->count()->fetch_assoc();
echo "<br>";
echo "<br>";
for($k=1;$k<=$i["count(*)"] / 5;$k++){
  ?>
<a href="http://localhost/tamrinb/ecommerce1/getProduct/page/<?php echo $k;?>/<?php echo $from;?>/<?php echo $to;?>"><?php echo 'page'.$k;?> </a>
<?php 
}
?>