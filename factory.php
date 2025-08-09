<?php 
class factory{
    public static function test($className){
       return new $className;
    }
}
// factory::test($className);
