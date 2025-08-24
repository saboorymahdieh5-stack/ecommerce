<?php 
$id=$GLOBALS['urlArray'][4];
// $modelFooter=factory::factory("footer");
$integer=(int)$id;
footer::delete($integer);
?>