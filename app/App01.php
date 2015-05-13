<?php

namespace app;

use lib\util\IHelloWorld;

class App01 {
    /**
     * @var IHelloWorld|null
     */
    protected $hw = null;
    function __construct(IHelloWorld $helloWorld){
        $this->hw = $helloWorld;
    }
    function Run(){
        $this->hw->HelloWorld();
    }
}