<?php 

class model extends facade{
  public $join;
  public $type;
  public $group;
   public  $table;
    public  $having;
    public $orderby;
    public  $null;
    public  $middle;
    public  $count = '';
    public  $right;
    public  $from;
    public  $result;
    public  $query;
    public  $where;
    public $sql;
    public  $fields;
    public  $fieldValue;
    public  $base;
    public  $limit;
    public $offset;
    public  $pagenet;

     protected function join(string $table){
      // foreach($fields as $key=>$value){
    //  $b=static::getInstance();

      // self::$type="join";
     $this->join = " LEFT " . " JOIN ". $table ;
     $this->where("product.category","=","category.id");
    //  static::group();
    //  $b->join.=" GROUP BY category.id";
      // }
    //  $b->query.=$b->join;
    //  $o.=self::$right;
    //  var_dump($b->query);
    //  die();
     return $this;

    }
 protected function group(){
     $b=static::getInstance();
     $b->group=" GROUP BY category.id";

 }

 protected function count1( $product,$key){
     $k=static::getInstance();
   $obj=$product::getInstance();
  $b = '';
   $m=$obj->query;
   $b= $obj->select(["COUNT(*)"])->from("product")->where("product.category","=","category.id")->render();
   $obj->count .= ",( " .$b." ) "."$key";
  // $t=$k->having(["pro_count"],0);
    // $t=$k->orderBy("pro_count");
  // var_dump($t);
  $m=$k->query.=$obj->count." FROM "." category ";
  $p=$k->get();
  return $p;
 }

    protected function orderBy($value){
    //  $b=factory::getInstance(static::$table);
     $b=static::getInstance();


      $b->orderby=" ORDER BY ". "price  "  . $value ;
    //  $b->query.=$b->orderby;
     return $b;
    }

    protected function null(array $name,$key ){
     $b=static::getInstance();
     $b->null=" , "." COALESCE "." ( ".$name[0]." , "."'بدون محصول'"." ) ".$key;
     return $b;
    }
    protected  function resultNull(){
     $b=static::getInstance();
     $m=$b->null(["product.name"],"pro_name")->from("category")->join("product");
     $b->query.=$b->null;
       return $b;
    }
      //  public static function select(array $fields = ["*"]){
      //   self::$fields = implode(' , ',$fields);
      //   self::$query=="";
      //   self::$query = "SELECT " . self::$fields . " FROM " . static::$table ; 
      //   return self::makeObj();
      // }
      protected function case(string $name , array $list,string $not){
        self::$query.=", CASE ".$name;
        foreach($list as $key=>$value){
        self::$query.=  " WHEN " .$key ." THEN '$value'";
       }
      self::$query.=" ELSE '$not'"." END "."product_point";
     return  $b=static::getInstance();


    }
    protected function having(array $name,int $number){
      $b=static::getInstance();
      var_dump($b);

     $b->having=" HAVING ".$name[0]."=".$number;
     return $b->having;


    }
      protected  function select(array $fields){
        $this->type='select';
        $this->fields=implode(',',$fields);
        $this->query =" SELECT ". $this->fields;
    
        return $this;
      }
      protected function from(){
        echo "jkcsn";
        $this->from=" FROM ". $this->table;
      // $b->query.=$b->from;
      var_dump($this->table);
      // die();+
        return $this;
      }
       protected function with(string $table){
       $b=static::getInstance();
        $b->select(["*"])->from("product")->join($table)->render();
       return $b;
      }
        protected function result(){
        self::$result=" FROM ". static::$table;
        $y=self::$middle.=self::$result;
        self::$query.=$y;
        // $n=factory::getInstance(static::$table);
     $b=static::getInstance();

        // var_dump($n);
        // die();
        return $b->get();
      }
     protected function pagenet(int $limit){
      //  $b=factory::getInstance(static::$table);
     $b=static::getInstance();
      $page=$GLOBALS['urlArray'][4];
      $offset=($page-1)*$limit;
      $b->pagenet=" LIMIT " . $limit . " OFFSET " . $offset ;
      $b->query.=$b->pagenet;
      return $b;
   }

    protected function first($args){
      // $b=static::getInstance();
      // var_dump($b);
      // die();
      if(empty($this->query="")){
    $this->fields=implode(',',$args);
    // var_dump($b->fields);
    // die();
    $this->query=" SELECT ". $this->fields . " FROM " .$this->table ;
      }
    return  $this;

   }

      protected function create($data){
     $b=static::getInstance();
       $b->type='create';
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
    
      protected function find($id){
     $b=static::getInstance();
        $b->query="SELECT"."*"." FROM ".static::$table." WHERE " ."id". "=" . $id;
        $result=static::get();
        return $result->fetch_assoc();
      }
      
      
      protected function delete($id){
     $b=static::getInstance();
      $b->type='delete';
        self::$query=" DELETE ". " FROM " . static::$table . " WHERE " . "id" . "=". $id;
        self::get();
      }

      
      protected function update($data,$id){
     $b=static::getInstance();
     $b->type='update';
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


      protected  function where(string $field,string $operator="=" ,string $value){
     $b=static::getInstance();
        $b->where=[];
        $b->where[]="$field $operator $value";
          return $b;
      }
        
        protected function limit( int $start ){
          self::$limit = " LIMIT " . $start ;
          self::$query.=self::$limit;
           return $b=static::getInstance();

        }
        
        protected function offset(int $offset){
          self::$offset = " OFFSET " . $offset;
          self::$query.=self::$offset;
          self::$query.=";";
           return $b=static::getInstance();

        }
        
   protected function getPrice($from,$to){
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

    protected function sort($value,$string){
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
    protected function count(){
          $b=static::getInstance();

          $b->query="SELECT count(*) FROM " . static::$table;
          // $x=factory::getInstance(static::$table);

          return $b->get();
        }
    protected function render(){
    //  var_dump($b);
     
    //  if(!in_array($b->type,["create","update"])){
    //    //  echo "gjsa,v";
    //    //  $b->from('category');
    //    $b->query.= $b->from;
    //    //  var_dump($b->query);
    //    $b->from='';
    //   }
    if($this->from){
     $this->query.=$this->from;
     // echo "efs";
     $this->from='';
    }
    if($this->orderby){
      $this->query.=$this->orderby;
      // var_dump($b->query);
      }

  if($this->join){
    $m=$this->join.=" ON ".implode(",",$this->where);
    $this->query.=$m;
    $this->join='';
    $this->where=[];
    // var_dump($b->query);

  }
     if($this->where && !$this->join){
      $this->query.=" WHERE ".implode(",",$this->where);
      // $m.=" WHERE ".implode(",",$b->where);
     }
     
    //  var_dump($b->query);
      if($b->group){
       $b->query.=$b->group;
       $b->group='';
      }
      if($b->having){
        $b->query.=$b->having;
      }
      // if($b->null){
      //   $b->query.=$b->null;
      //   // $b->query='';
      // //  var_dump($b->query);
      // }
      return $b->query;
         }
        protected  function get(){  
        $this->getObj();
          $sql= $this->render();
          var_dump($sql);
          return $this->connection->query($sql);
          
        }

    }
  
      