<?php 
$id=$GLOBALS['urlArray'][3];
$integer=(int)$id;
footer::where("id","=",$integer)->delete($integer);

?>