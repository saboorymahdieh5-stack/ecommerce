<?php 
include("autoload/autoload.php");
include("router.php");
include("getObject.php");
$object=new getObject;
$obj=$object->object("router");
// $router=new router();
$urlArray=$obj->parseUrl();
$obj->route();
// $factory=new factory;
// $loadFile=$factory->factory("loadFile");
// $loadFile->loadFile('header');
// $loadFile->loadFile($urlArray[2]);
// $loadFile->loadFile("footer");
