<?php 
$id=$GLOBALS['urlArray'][3];
$integer=(int)$id;
category::where("id","=",$id)->update($_POST);

?>