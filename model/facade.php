<?php 
class facade extends mainDb{
public static function __callStatic($method,$args){
    // var_dump(new static);
    return (new static)->$method($args);
}
public function __call($method,$args){
return $this->$method();
}
}
