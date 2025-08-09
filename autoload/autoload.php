<?php
class autoload{
    public function autoload($className){
        $addres='model/' . $className . '.php';
        //if($className == 'loadFile' || $className=='factory'){
        if(!file_exists($addres)){
            $addres = $className . '.php';
        //}
        }
        include $addres;
    
    }
}
$autoload = new autoload;
spl_autoload_register([$autoload , 'autoload']);

?>
