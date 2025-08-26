<?php
// $connection= new mysqli("localhost","root","","ecommerce1");
// $connection->query("SELECT * FROM product");
//$connection->query("INSERT INTO product(name,price,category,description)VALUES('panir','23000','labaniat','panir ast')");
//$connection->query("UPDATE product SET name='mast', price='30000' , category='labaniat' , description='bad ast' WHERE id=1 ");

class mainDb{
    public $connection;
    protected  $table;
    public  $instances=[];
    // public static function __construct(){
    //     $this->connection=new mysqli("localhost","root","","ecommerce1");
    // }
    protected  function getObj(){
       return $this->connection=new mysqli("localhost","root","","ecommerce1");
    }
    // public static function getInstance(){
    // //     $subclass=static::class;
    // //     if(!isset(self::$instances[$subclass])){
    // //         self::$instances[$subclass]=new static();
    // //     }
    // //     return self::$instances[$subclass];
    // // }
}
    // public function select(){
//      return    $this->connection->query("SELECT * FROM {$this->tableName}");
//     }

// //   public function create(){
// // $this->connection->query("INSERT INTO product(name,price,category,description)VALUES('panir','23000','labaniat','panir ast')");
        
// //     }

// //     public function update(){
// //         $this->connection->query("UPDATE product SET name='mast', price='30000' , category='labaniat' , description='bad ast' WHERE id=1 ");
// //     }

//     public function delete(){
//         $this->connection->query("DELETE FROM {$this->tableName} ");
//          $this->where();
//     }




// $conn=new mainDb;
//$conn->select();
// $conn->create();
// $conn->update();
// $conn->delete();