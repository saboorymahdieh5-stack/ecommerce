<?php 
// include('mainDB.php');
class modelProduct extends mainDB{
    public $table="product";

    public function create($data){
        $name=$data['name'];
        $price=$data['price'];
        $category=$data['category']; 
         $description=$data['description'];
        
        $this->conn->query("INSERT INTO product(name,price,category,description) VALUES('$name','$price','$category', '$description')");
    }
    public function update($data){
        $id = $data['id'];
        $name=$data['name'];
        $price=$data['price'];  
        $category=$data['category'];
        $description=$data['description'];
        $this->conn->query("UPDATE product SET name='$name' ,price='$price',category='$category', description='$description' where id='$id'");
    }
    
public function getProductCategoryTitle(){
    // var_dump($id);
    $result=$this -> conn->query("SELECT title FROM category ");
    $category=$result->fetch_assoc();
    return $category['title'];
}
public function editProductCategoryTitle(){
    return $this->conn->query("SELECT id,title FROM category");
}
}
?>