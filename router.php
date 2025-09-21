<?php
// include("getObject.php");
// include()
  class router{
    public $urlArray;
    public $address;
    public $request;
//     public function __construct(){
//     // $this->request=new request;
//     // $this->url=$this->request->result();
// }
    public function parseUrl(){
    $url=url::requestUrl();
    $this->address=$this->urlArray=explode("/",$url);
}
    public function route(){
    unset($this->address[0]);
    unset($this->address[1]);
    $this->address=implode("/",$this->address);
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