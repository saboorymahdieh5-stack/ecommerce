<?php
$id=$GLOBALS['urlArray'][3];
// $modelFooter=factory::factory("footer");
$integer=(int)$id;
// var_dump($integer);
var_dump($_POST);
footer::where("id","=",$id)->update($_POST);

?>