<?php

class Calendario {
    public $view;

    public function __construct() {
        $this->view = new Views();
    }

    public function calendario(){
        $this->view->getView($this,"calendario");
    }
}