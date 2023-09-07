<?php
class Views{
    function getView($controller,$view){
        $controller = get_class($controller);
        if($controller == 'Login'){
            $view = "Views/".$view.".php";
            require_once($view);
        }else{
            $controller = ucwords($controller);
            $view = "Views/".$controller."/".$view.".php";
            require_once($view);
        }
        
    }
}