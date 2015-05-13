<?php

namespace app;

use lib\util\AnotherStringPrinter;

require_once "vendor/autoload.php";

// Plain old manual resolution
//use lib\util\HelloWorld;
//$app = new App01( new HelloWorld() );

// Dependency-Injection resolution
$dic = new \DiContainer\Container(array(new \DiContainer\IniBasedConfigurator("conf/DI-phpdic-conf.ini")));
//var_dump($dic);

$app = $dic->Resolve("\\app\\App01");
$app->setPrinter( $dic->Resolve("lib\\util\\IStringPrinter") );

$app->Run();

$app->setPrinter( $dic->Resolve("lib\\util\\AnotherStringPrinter") );
$app->Run();
