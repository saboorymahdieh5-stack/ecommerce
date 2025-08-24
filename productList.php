<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <form action="http://localhost/tamrinb/ecommerce1/getProduct/page/1" method="post">
      <input type="text" name="from" placeholder="from">
      <input type="text" name="to" placeholder="to">
      <button>save</button>
      
      
      
    </form>
    
  </body>
  </html>
  <body>
    <form action="http://localhost/tamrinb/ecommerce1/getSort" method="post">
     <select name='sort'>
       <option value="DESC">desc</option>
        <option value="ASC">asc</option>
    </select>
         <select name='price'>
           <option value='price'>price</option>
    </select>
         <button>✅</button>
    </form>
    </body>
    <?php

    //  var_dump($_POST);
    // if($_POST){
      // $sort=$_POST["sort"];
      // $value=$_POST["price"];
    // }else if(count($GLOBALS['urlArray'])!=6){
    //  $sort=$GLOBALS['urlArray'][6];
    //  $value=$GLOBALS['urlArray'][7];

    // }
    //  if(count($GLOBALS['urlArray'])!=6){
    // $product=factory::getInstance("product");
      $result=product::with("category")->pagenet(10)->get();
    // $result=product::select(["*"])->case("product.point",['1'=>"khub",'2'=>"kheili khub",'3'=>"alii"],"not")->from("product")->get();
    // $result=$product->select(["id","name","price","category","description"])->with(["catA"=>["title","category"]])->result();
    // $result=product::select(["product.id","product.name","product.description"])->from("product")->join("category",["cat"=>["name","category"]])->get();
    // $result=product::select(["id","name","description"])->null(["product.name"])->from("category")->join("product",["cat"=>["name","category"]])->get();

      //  $result=category::select(["id","name","price","category","description"])->where(["cat_pro_count"=>["name","category"]])->subCount("prduct","cat_pro_count")->from()->get();

    
        // $result=$product->getSql()->get();
    // $m=$result->fetch_assoc();
    // var_dump("kk");
  // $m=count($result)
      // die();
  // $result=product::where('price',20000,">")->sort('price','desc');
?>
  <?php
  // $result=product::where('price',20000,">")->sort($value,$sort);

  ?>
  

<div>
  <?php
  $pageNet=5;

    $pageNumber=$GLOBALS['urlArray'][5];
    $offset=($pageNumber-1)*$pageNet;
    $limit=$pageNet+$offset;
    // var_dump($offset);
    // var_dump($limit);
    ?>
    <?php
    for($j=$offset;$j<$limit;$j++){
      if($result->num_rows>$j){
        $finalResalt=$result->fetch_assoc();
        // var_dump($finalResalt);
        ?>
        <div>
          <div>
            <?php
          echo $finalResalt["id"]."</br>";
          // var_dump($resault[$j]["id"]);
          ?>
     </div>
     <div>
       <?php
     echo $finalResalt["name"]."</br>";
     ?>
    </div>
    <div>
      <?php 
     echo $finalResalt["price"]."</br>";
     ?>
     </div>
     <div>
       <?php
    //  echo $finalResalt["cat"]."</br>";
    ?>
     </div>
     <div>
       <?php
     echo $finalResalt["description"]."</br>";
     ?>
</div>
<div>
  <?php
    //  echo $finalResalt["point"]."</br>";
    ?>
</div>


<a href="http://localhost/tamrinb/ecommerce1/deleteProduct/<?php echo $finalResalt['id']?>">
  حذف
</a>
<a href="http://localhost/tamrinb/ecommerce1/productSingle/<?php echo $finalResalt['id']?>">
نمایش
 </a>
 <a href="http://localhost/tamrinb/ecommerce1/editProduct/<?php echo $finalResalt['id']?>">
 ویرایش
 </a> 
 
</div>
<?php
  
  }
}
 ?>
 </div>
</div>
</div>
<?php 
// $product=factory::getInstance("product");
$category=factory::getInstance("category");
$result1=product::first(["*"])->get();
for($k=0;$k<1;$k++){
  $first=$result1->fetch_assoc();
  $title1=$category->find($first['category']);
?>
 <div>
      <div>
        <?php echo $first['id'];?>
      </div>
      <div>
        <?php echo $first['name'];?>
      </div>
      <div>
        <?php echo $first['price'];?>
      </div>
      <div>
        <?php echo $title1['name'];
    ?>
  </div>
  <div>
    <?php echo $first['description'];?>
  </div>
    <?php 
}
?>

<?php 
// $m=product::select(["*"])->get();
 $product=factory::getInstance("product");
$i=$product->count()->fetch_assoc();
echo "<br>";
// var_dump($i);
echo "<br>";
// $n=$m->num_rows/5;
// $p=ceil($n);
for($j=1;$j<=$i["count(*)"] / 5;$j++){
  ?>
<a href="http://localhost/tamrinb/ecommerce1/productList/page/<?php echo $j;?>"><?php echo 'page'.$j;?> </a>
<?php 
}
    //  }
?>
<?php
// $product=product::where('price',20000,">");
?>
<?php
  // $result=product::where('price',20000,">")->sort('price','desc');
?>