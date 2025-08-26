<?php 
//include("header.php");
include("autoload/autoload.php");
include("roater.php");
$roater=new roater($url);
$urlArray=$roater->parseUrl();
$factory=new factory;
$loadFile=$factory->factory("loadFile");
var_dump($loadFile);
$loadFile->loadFile('header');
$loadFile->loadFile($urlArray[2]);
$loadFile->loadFile("footer");
