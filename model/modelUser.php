<?php
// include("mainDB.php");

class modelUser extends mainDB{
     public $table="user";
    public function create($data){
        $name=$data['name'];
        $family=$data['family'];
        $phonNumber=$data['phonNumber'];
        $this->conn->query("INSERT INTO user (name,family,phonNumber) VALUES('$name','$family','$phonNumber') ");
    }
    public function update($data){
        $id=$data['id'];
        $name=$data['name'];
        $family=$data['family'];
        $phonNumber=$data['phonNumber'];
        $this->conn->query("UPDATE user SET name='$name' , family='$family', phonNumber='$phonNumber' where id='$id'");
    }
}


?>