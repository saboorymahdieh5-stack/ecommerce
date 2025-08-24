<?php 

class model extends mainDb{
  public $join;
   public static $table;
    public static $having;
    public $orderby;
    public static $null;
    public static $middle;
    public  $count;
    public  $right;
    public  $from;
    public static $result;
    public  $query;
    public  $where;
    public $sql;
    public static $fields;
    public static $fieldValue;
    public static $base;
    public static $limit;
    public static $offset;
    public  $pagenet;

     public static function join(string $table){
      // foreach($fields as $key=>$value){
     $b=static::getInstance();

      // self::$type="join";
     $b->right = " INNER " . " JOIN ". $table ;
     static::where("product.category","=","category.id");
     $b->right.=" GROUP BY category.id".$b->pagenet;
      // }
     $m=$query.=self::$right;
    //  $o.=self::$right;
    //  var_dump($m);
    //  die();
     return $b;

    }
      public static function subCount($object,string $key){
       $b=$object::getInstance();
      
       // die();
       $o='';
       // $product=new 
       $b->count.=",(";
       $o.=$b->select(["COUNT(*)"])->from("product")->where("product.category","=","category.id");
       $o.=")$key";
       $b->count .=$o;
      //  var_dump($b->count);
            // var_dump($b->count);
            // var_dump($u);

            // die();
        // if($table=='product'){
          // var_dump($p);
          // die();
          // self::$table=$table;
          // $m=product::class;
          // var_dump($m);
          // die();
          // self::$count.=",(".$table::select(["COUNT(*)"]).$table::from().$table::where();
          // $table::$count.=")$key";
          // }
          // $p=self::$query.=$table::$count;
          // foreach($fields as $key=>$value){
            // $object=new $table[0];
            // $table::$type="subCount";
            //  static::where("product.category","=","category.id");
            // self::$count=" , ( "." SELECT " . " COUNT(*) " . " FROM " . $table .")$key"; 
            // die();
            // self::$count=",(";
            // var_dump($object);
            // $object->select(["COUNT(*)"]);
            // $object->from();
            // $object->where("product.category","=","category.id");
            // self::$count.=")$key";
            // die();
            // $v = "(" . self::$count . ")"
            // echo "acbkj";
            // }
            // var_dump( self::$count);
            // die();
            // $p.=self::$orderby;
            // return $p=factory::getInstance(static::$table);
            // var_dump($p);


    }
    // public static function belongsTo(string $table,array $fields){
    //    foreach($fields as $key=>$value){
    //     self::$middle=",("." SELECT ". "*" ." FROM ". $table ." WHERE ".implode("=",static::$related[$table]).")$key ";
    //  }
    // }
    public function orderBy($value){
    //  $b=factory::getInstance(static::$table);
     $b=static::getInstance();


      $b->orderby=" ORDER BY ". "price  "  . $value ;
     $b->query.=$b->orderby;
     return $b;
    }

    public static function null(array $name,$key ){
     self::$null=" , "." COALESCE "." ( ".$name[0]." , "."'بدون محصول'"." ) ".$key;
     self::$query.=self::$null;
    //  $o.=self::$right;
     return factory::getInstance(static::$table);

    }
      //  public static function select(array $fields = ["*"]){
      //   self::$fields = implode(' , ',$fields);
      //   self::$query=="";
      //   self::$query = "SELECT " . self::$fields . " FROM " . static::$table ; 
      //   return self::makeObj();
      // }
      public static function case(string $name , array $list,string $not){
        self::$query.=", CASE ".$name;
        foreach($list as $key=>$value){
        self::$query.=  " WHEN " .$key ." THEN '$value'";
       }
      self::$query.=" ELSE '$not'"." END "."product_point";
     return  $b=static::getInstance();


    }
    public static function having(array $name,int $number){
     self::$having=" HAVING ".$name[0]."=".$number;
     return $b=static::getInstance();


    }
      public static function select(array $fields=["*"]){
     $b=static::getInstance();

        // echo "lkjhg";
        // var_dump($b);
        self::$fields=implode(',',$fields);
        $b->query =" SELECT ". self::$fields;
        // var_dump(self::$query);
        // echo "dyxuch"; 
        return $b;
      }
      public function from(string $table){
     $b=static::getInstance();


        $b->from=" FROM ". $table;
      $b->query.=$b->from;
        return $b;
      }
       public static function with(string $table){
        // var_dump($table);
      //  $b=factory::getInstance(static::$table);
     $b=static::getInstance();


        $b->select(["*"])->subCount(product::class,"pro_count")->from("category")->orderBy("pro_count")->join($table);
        // $r=product::class;
        // static::select(["*"]);
        //  $table->subCount("pro_count");
        //  $r->from("category");
        //  static::orderBy("proCount");

       return $b;
      }
        public static function result(){
        self::$result=" FROM ". static::$table;
        $y=self::$middle.=self::$result;
        self::$query.=$y;
        // $n=factory::getInstance(static::$table);
     $b=static::getInstance();

        // var_dump($n);
        // die();
        return $b->get();
      }
     public static function pagenet(int $limit){
      //  $b=factory::getInstance(static::$table);
     $b=static::getInstance();


      $page=$GLOBALS['urlArray'][5];
      $offset=($page-1)*$limit;
      $b->pagenet=" LIMIT " . $limit . " OFFSET " . $offset ;
      $b->query.=$b->pagenet;
      return $b;
   }

    public static function first(array $fields=["*"]){
      if(empty(self::$query="")){
    self::$fields=implode(',',$fields);
    self::$query=" SELECT ". self::$fields . " FROM " . static::$table ;
      }
    return  $b=static::getInstance();

   }

      public static function create($data){
        foreach($data as $key=>$value){
         $field[]=$key;
        $fieldValue[]=$value;
        }
        $implode=implode(",",$field);
        $implode1=implode("','",$fieldValue);
        self::$query="";
        self::$query.="INSERT INTO ".static::$table." ( ".$implode." ) "." VALUES "." ( "."'".$implode1."'"." )";
        self::$query.=';';     
        return self::get();
      }
    
      public static function find($id){
        self::$query="SELECT"."*"." FROM ".static::$table." WHERE " ."id". "=" . $id;
        $result=self::get();
        return $result->fetch_assoc();
      }
      
      
      public static function delete($id){
        self::$query=" DELETE ". " FROM " . static::$table . " WHERE " . "id" . "=". $id;
        self::get();
      }

      
      public static function update($data,$id){
        $m=1;
        foreach($data as $key=>$value){
          self::$base.=$key."='".$value."'";
          $countData=count($data);
          if($countData>$m){
            $m++;
            self::$base.=",";
            
          }
        } 
        if(self::$query){
          self::$query="";   
            }
        self::$query=" UPDATE ". static::$table ." SET ". (self::$base)." WHERE "." id ". "=". $id; 
        self::$query.=";";
        self::get();
      }


      public static  function where(string $field,string $operator="=" ,string $value){
     $b=static::getInstance();


        // foreach($fields as $key=>$value){
        //     $l=implode("=",static::$related[$value[1]]);
        // }
        $b->where[]="$field $operator $value";
        // die();  
        // foreach(self::$where as $value){
          
          $implode = implode($operator , $b->where);
          // var_dump($implode);
        // }
        // var_dump(self::$where);

        if($b->join){
          echo"k";  
          $b->right.=" ON ".$implode;
        }
        // self::$where=[];
        // die();
        // if(self::$query==""){
          // static::select();
          // self::$query.= " WHERE " . $l;
          // self::$where=" WHERE ".$l;
          //   if(!in_array(self::$type,["select","update","delete","from"])){
          //       echo "hihboonlkib";
          // }
          return $b;
      }
        
        public  static function limit( int $start ){
          self::$limit = " LIMIT " . $start ;
          self::$query.=self::$limit;
           return $b=static::getInstance();

        }
        
        public static function offset(int $offset){
          self::$offset = " OFFSET " . $offset;
          self::$query.=self::$offset;
          self::$query.=";";
           return $b=static::getInstance();

        }
        
   public static function getPrice($from,$to){
    $from=$from;
    $to=$to;
    if($from>$to){
      $offset=$to-1;
      $limit=$from-$offset;
      $result1=product::select(["id","name","price","category","description"])->limit($limit)->offset($offset)->get();
      for($o=1;$o<$result1->num_rows;$o++){
        $product2=$result1->fetch_assoc();
        $title=category::find($product2['category']);
        $product2["category"]=$title["title"];
        $products[] = $product2;
      
      }
      
      $m=count($products);
      for($i=0;$i<$m;$i++){
        for($j=0;$j<$m-1;$j++){
      if($products[$j]["price"]<$products[$j+1]["price"]){
      $list=$products[$j];
      $products[$j]=$products[$j+1];
      $products[$j+1]=$list;
    }
      
    }
    }

    }else{
      
        $offset=$from-1;
        $limit=$to-$offset;
        $result2=product::select(["id","name","price","category","description"])->limit($limit)->offset($offset)->get();
        for($o=1;$o<$result2->num_rows;$o++){
        $product2=$result2->fetch_assoc();
        $title=category::find($product2['category']);
        $product2["category"]=$title["title"];
        $products[] = $product2;
          }
         $m=count($products);
        for($i=0;$i<$m;$i++){
        for($j=0;$j<$m-1;$j++){
      if($products[$j]["price"]>$products[$j+1]["price"]){
      $list=$products[$j];
      $products[$j]=$products[$j+1];
      $products[$j+1]=$list;
      
    }
  }
  }
}

  // $k=factory::getInstance(static::$table);
     $b=static::getInstance();

  $b->get();
  return $products;
  }

        public static function sort($value,$string){
          $value=$value;
          $string=$string;
        //  $p=factory::getInstance(static::$table);
     $b=static::getInstance();

        $c=$b->get();
        for($i=1;$i<$c->num_rows;$i++){
          $r=$c->fetch_assoc();
          $y=category::find($r["category"]);
          $r["category"]=$y["title"];
          $values[]=$r;
    
        }
         $result=count($values);
         if($string=='desc'){
         for($i=0;$i<$result;$i++){
        for($j=0;$j<$result-1;$j++){
      if($values[$j][$value]<$values[$j+1][$value]){
      $list=$values[$j];
      $values[$j]=$values[$j+1];
      $values[$j+1]=$list;
    }
      
    }
    }
  }else if($string=='asc'){
        for($i=0;$i<$result;$i++){
        for($j=0;$j<$result-1;$j++){
      if($values[$j][$value]>$values[$j+1][$value]){
      $list=$values[$j];
      $values[$j]=$values[$j+1];
      $values[$j+1]=$list;
    }
      
    }
    }
  }
  return $values;

        }
        public static function count(){
          self::$query="SELECT count(*) FROM " . static::$table;
          // $x=factory::getInstance(static::$table);
     $b=static::getInstance();

          return $b->get();
        }
         public static function render(){
          //  $x=factory::getInstance(static::$table);
     $b=static::getInstance();

           $sql=$b->query;
           if(isset($b->count)){
            $sql.=$b->count;
            $x->count = '';
           }
        //  if(isset(self::$result)){
        //   $p=self::$query.=self::$middle;
        //   $p.=self::$result;
        //  }
        //  if(!in_array(static::$type,['create','update'])){
        //   $x->select()->from();
        //   self::$from="";
        //  }
        // if(isset(self::$limit)){
        //   self::$query.=self::$limit;
        //   self::$limit="";
        // }
        // if(isset(self::$offset)){
        //   self::$query.=self::$offset;
        //   self::$offset="";
        // }
        // if(!in_array(self::$type,['where'])){

        // }
        // return $x;
         }
        public static function get(){  
          self::getObj();
          // $x=factory::getInstance(static::$table);
     $b=static::getInstance();

          // $sql= $b->render();
          var_dump($x->query);
          // die();
          
          return self::$connection->query($x->query);
          
        }

    }
  
      