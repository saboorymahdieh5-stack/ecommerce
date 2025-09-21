<?php 
class urlRouter{
 public static function getRouter(){
    $routeList=routeList::route();
     foreach($routeList as $key=>$value){
        if($key==$this->address){
            $value1=$value[0];
            $value2=$value[1];
            $controller=new $value1;
            // var_dump($controller);
            $show=$controller->$value2();
    }    
     }
 }
}