<?php 
$url=$_SERVER["REQUEST_URI"];
class router{
    public $url;
    public $urlArray;
    function __construct($url){
        $this->url=$url;
    }
    public function parseUrl(){
        return $this->urlArray=explode("/",$this->url);
    }
}
?>