<?php
// include("mainDB.php");
class modelCategory extends mainDB{

public $table="category";

public function create($data){
    $title=$data['title'];
    $description=$data['description'];
     
    $this->conn->query("INSERT INTO category (title,description) VALUES('$title','$description')");
}

public function update($data){
    $id=$data['id'];
    $title=$data['title'];
    $description=$data['description'];
    $this->conn->query("UPDATE category SET title='$title' , description='$description' where id='$id'");
}
}