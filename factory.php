<?php 
class factory {
    public static function factory($className){
        // var_dump($className);
        return new $className;
    }
}
$factory=new factory;

