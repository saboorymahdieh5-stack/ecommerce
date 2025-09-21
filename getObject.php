<?php 
interface makeObject{
public function object($object);
}

class getObject implements makeObject{
public function object($object){
       return   $obj=new $object;
       var_dump($obj);
       die();
    }
}
// $object=new getObj;
// $object->object();