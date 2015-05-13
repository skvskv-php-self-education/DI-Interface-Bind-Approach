<?php

namespace app;

use lib\util\IHelloWorld;
use lib\util\IStringPrinter;

class App01 {
    /**
     * @var IHelloWorld|null
     */
    protected $hw = null;
    /**
     * @var IStringPrinter|null
     */
    protected $printer = null;
    function __construct(IHelloWorld $helloWorld){
        $this->hw = $helloWorld;
        var_dump( func_get_args() );
    }
    function setPrinter(IStringPrinter $printer){
        $this->printer = $printer;
    }
    function Run(){
        $this->hw->HelloWorld();
        if( !is_null($this->printer) ){
            $this->printer->printString();
        }
        else{
            echo "IStringPrinter not available!\n";
        }
    }
}