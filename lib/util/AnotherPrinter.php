<?php


namespace lib\util;


class AnotherStringPrinter implements IAnotherStringPrinter, IStringPrinter
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