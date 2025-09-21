<?php
class mainDb{
    public $connection;
    protected  $table;
    public  $instances=[];
    protected  function getObj(){
       return $this->connection=new mysqli("localhost","root","","ecommerce1");
    }
}