<?php 

class model extends facade{
   public $update;
   public $join;
   public $type;
   public $group;
   public $table;
   public $having;
   public $orderby;
   public $null;
   public $to;
   public $count = '';
   public $right;
   public $from;
   public $result;
   public $query;
   public $where;
   public $sql;
   public $fields;
   public $fieldValue;
   public $base;
   public $limit;
   public $offset;
   public $pagenet;

     protected function join($field){
        $this->join = " INNER   " . " JOIN ". $field[0];
        $this->where(["product.category","=","category.id"]);
        return $this;

    }
  protected function group(){
     $this->group=" GROUP BY category.id";

 }

 protected function count1($key){
  $product=factory::factory("product");
  $b = ''; 
  $b= $product->select(["COUNT(*)"])->from()->where(["product.category","=","category.id"])->render();
  $product->count .= ",( " .$b." ) "."$key[0]";
  // $this->having("pro_count",0);
  $t=$this->orderBy(["pro_count"]);
  $m=$this->query.=$product->count." FROM "." category ".$this->orderby;
  // var_dump($m);
  // die();
  $p=$this->get();
  return $p;
 }

    protected function orderBy($value){
     $this->orderby=" ORDER BY ". $value[0]  . " ASC " ;
     return $this;
    }

    protected function null($name,$key){
     $this->null=" , "." COALESCE "." ( ".$name." , "."'بدون محصول'"." ) ".$key;
     return $this;
    }
    protected  function resultNull(){
     $m=$this->null("product.name","pro_name")->from()->join("product");
     $this->query.=$this->null;
       return $this;
    }

      protected function case(string $name , array $list,string $not){
        $this->query.=", CASE ".$name;
        foreach($list[0] as $key=>$value){
        $this->query.=  " WHEN " .$key ." THEN '$value'";
       }
      $this->query.=" ELSE '$not'"." END "."product_point";
     return  $this;


    }
    protected function having($name,int $number){
     $this->having=" HAVING ".$name."=".$number;
     return $this->having;
    }

    protected function select($field){
        $this->type='select';
        $this->fields=implode(',',$field);
        $this->query =" SELECT ". $this->fields;
        return $this;
      }
    protected function from(){
        $this->from="  FROM  ". $this->table;
        return $this;
      }
    protected function belongsTo( $table , $field){
  
      foreach($this->fillable as $key=>$value){
      $result[]=$this->table.".".$value." $key ";
    }
    // $result=[];
    foreach($field as $key=>$value){
      $result[]=$table.".".$value." ".$table."_".$value;
    }
    // var_dump($result);
    return $this->select($result)->from()->join([$table]);

    }
    
    protected function with($field){
        $this->select($field[0])->from()->join($field[1]);
       return $this;
      }
    // protected function result(){
    //     self::$result=" FROM ". static::$table;
    //     $y=self::$middle.=self::$result;
    //     self::$query.=$y;
    //  $b=static::getInstance();
    //     return $b->get();
    //   }
     protected function pagenet(int $limit){
    //  $b=static::getInstance();
      $page=$GLOBALS['urlArray'][4];
      $offset=($page-1)*$limit;
      $this->pagenet=" LIMIT " . $limit . " OFFSET " . $offset ;
      $this->query.=$this->pagenet;
      return $this;
   }

    protected function first(){
     return $this->select(["*"])->from()->limit(1)->offset(0)->get();
   }

      protected function create($data){
        foreach($data[0] as $key=>$value){
         $field[]=$key;
        $fieldValue[]=$value;
        }
        $implode=implode(",",$field);
        $implode1=implode("','",$fieldValue);
        $this->query="";
        $this->query.="INSERT INTO ".$this->table." ( ".$implode." ) "." VALUES "." ( "."'".$implode1."'"." )";
        $this->query.=';';     
        return $this->get();
      }
    
      protected function find($id){
        $this->query="SELECT"."*"." FROM ".$this->table." WHERE " ."id". "=" . $id[0];
        $result=$this->get();
        return $result->fetch_assoc();
      }
      
      
      protected function delete($id){
        $this->query=" DELETE ". " FROM " . $this->table ;
        $this->get();
      }

      
      protected function update($data){
        $m=1;
        foreach($data[0] as $key=>$value){
        $this->base.=$key."='".$value."'";
          $countData=count($data[0]);
           if($countData>$m){
            $m++;
            $this->base.=",";
            
          }
        } 
        if($this->query){
          $this->query="";   
            }
        $this->query=" UPDATE ". $this->table ." SET ". ($this->base); 
        $this->get();
      }


      protected  function where($args){
        // var_dump($a);
        $this->where=[];
        $this->where[]=" $args[0] $args[1] $args[2]";
        // $implode=implode(",",$this->where);
          return $this;
      }
        
        protected function limit( int $start ){
          $this->limit = " LIMIT " . $start ;
           return $this;

        }
        
        protected function offset(int $offset){
          $this->offset = " OFFSET " . $offset;
          return $this;

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

    //  $b=static::getInstance();

  $this->get();
  return $products;
  }

    protected function sort($value,$string){
          $value=$value;
          $string=$string;
    //  $b=static::getInstance();

        $c=$this->get();
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
          $this->query="SELECT count(*) FROM " . $this->table;
          return $this->get();
    }
    protected function render(){
    if($this->update){
      $this->update.=$this->where;
      echo "fnao";
      // die();
      // var_dump($this->update);
      // die();
    }
    // if($this->delete){
    //   $this->delete.=$this->where;
    //   var_dump($this->delete);
    // }
    if($this->from){
     $this->query.=$this->from;
     $this->from='';
    //  var_dump($this->query);  
    }
    if($this->limit){
      $this->query.=$this->limit;
    }
    if($this->offset){
      $this->query.=$this->offset;
    }
    // if($this->orderby){
    //   $this->query.=$this->orderby;
    //   // var_dump($this->query);
    //   }

  if($this->join){
    $m=$this->join.=" ON ".implode(",",$this->where);
    $this->query.=$m;
    $this->join='';
    $this->where=[];
  }
  
  //  if($this->where && !$this->join){
  //     $this->query.=" WHERE ".implode(",",$this->where);
  //   }
    // var_dump($this->query);
    
    if(!empty($this->where)){
      $this->query.=" WHERE ".implode('',$this->where);
    }
      if($this->group){
       $this->query.=$this->group;
       $this->group='';
      }
      // if($this->having){
      //   $this->query.=$this->having;
      //   // var_dump($this->query);
      // }
      return $this->query;
         }
        protected function get(){  
        $this->getObj();
          $sql= $this->render();
          // var_dump($sql);
          // die();
          return $this->connection->query($sql);
          
        }

    }
  
      