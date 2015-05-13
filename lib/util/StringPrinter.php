<?php


namespace lib\util;


class StringPrinter implements IStringPrinter
{
    /**
     * @var null|string
     */
    protected $string = null;
    function __construct($stringToPrint=""){
        $this->string = $stringToPrint;
    }
    function printString(){
        echo $this->string."\n";
    }
}