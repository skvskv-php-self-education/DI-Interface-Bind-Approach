<?php

namespace app;

require_once "vendor/autoload.php";

// Plain old manual resolution
//use lib\util\HelloWorld;
//$app = new App01( new HelloWorld() );

// Dependency-Injection resolution
$dic = new \DiContainer\Container(array(new \DiContainer\IniBasedConfigurator("conf/DI-phpdic-conf.ini")));
$app = $dic->Resolve("\\app\\App01");


$app->Run();
