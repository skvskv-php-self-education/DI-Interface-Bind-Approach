An PoC example of Autowiring DI use.
====================================

DI Features:
------------
    - supports namespaces
    - configures with INI file
    - binds Interfaces to Implementations
    - autowires dependencies
    - transient / singleton lifestyle support
    - scalar parameters supportes

Scalar parameters:
------------------
    - configured as constructor parameter php variable name / value pair

DI Limitations:
---------------
    - constructor-only dependencies supported?
    - no per-class customization of interface-implementation binding
    - non-versatile config file (pretty dumb, actually)
    - scalar parameter is a mess when a number of classes have same scalar php variable name in constructor
      one'd need to define a callback function to manually resolve this mess


Example call:
-------------
```php
$dic = new Container( 
		[ new IniBasedConfigurator("conf/DI-phpdic-conf.ini") ] 
	);
$app = $dic->Resolve("\\app\\App01");
$app->Run();
```
