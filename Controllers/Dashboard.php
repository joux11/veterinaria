<?php
class Dashboard{
    private $views;
    public function __construct() {
        $this->views = new Views();
    }

    public function dashboard(){
        $this->views->getView($this,"dashboard");
    }
}