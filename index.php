<?php 
//include("header.php");
include("autoload/autoload.php");
//include("model/factory.php");
include("roater.php");
$newrouter=new router($url);
$urlArray=$newrouter->parseUrl();
$newFactory= new factory;
$loadFile=$newFactory->test("loadFile");
$loadFile->loadFile('header');
$loadFile->loadFile($urlArray[2]);
$loadFile->loadFile('footer');
//include("footer.php");
?>