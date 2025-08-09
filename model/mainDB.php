n<?php
abstract class mainDb{
    abstract function create($data);
    abstract function update($data);

    public $serverName="localhost";
    public $userName="root";
    public $password="";
    public $dbName="ecommerce";
    public $conn;
    public $table;

    function __construct(){
        $this->conn=new mysqli($this->serverName,$this->userName,$this->password,$this->dbName);
    }

    public function select(){
        $selectQuery="SELECT * FROM $this->table";
        return $this->conn->query($selectQuery);
    }

    public function delete($id){
        $this->conn->query("DELETE FROM $this->table where id=$id");
    }

    public function find($id){
        return $this->conn->query("SELECT * FROM $this->table where id=$id ");
    }

   public function selectFooter(){
    return $this->conn->query("SELECT * FROM footersetting");
    }

}