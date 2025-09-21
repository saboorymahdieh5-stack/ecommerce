<?php 
$id=$GLOBALS['urlArray'][3];
$integer=(int)$id;
category::where("id","=",$integer)->delete($integer);