<?php
class Errors{
    private $views;
    public function __construct() {
        $this->views = new Views();
    }

    public function notFound(){
        $this->views->getView($this,"error");
    }
    
}

$notFound = new Errors();
$notFound->notFound();

