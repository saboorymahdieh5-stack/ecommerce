<?php
$url=$_SERVER['REQUEST_URI'];
// var_dump($url);
//include("$url");
//$url=$url."php";

class roater{
    public $url;
    public $urlArray;
    public function __construct($url){
        $this->url=$url;
    }
    public function parseUrl(){
        $address=$this->urlArray=explode("/",$this->url);
        //print_r($address);
        return $address;
    }
}