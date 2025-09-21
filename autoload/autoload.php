<?php
class autoload{
    public function autoload($className){
        $addres=$className . '.php';
        if(file_exists($addres)){
            include($addres);
        }else if(file_exists('controller/'.$addres)){
            include('controller/'.$addres);
        }
    }
}
$autoload = new autoload;
spl_autoload_register([$autoload , 'autoload']);

?>