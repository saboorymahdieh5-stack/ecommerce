<?php
$id=$GLOBALS['urlArray'][4];
// $modelFooter=factory::factory("footer");
$integer=(int)$id;
// var_dump($integer);
footer::update($_POST,$integer);
?>