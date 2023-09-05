<?php

require_once ("Config/Config.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'Login/login';
$urlArr = explode('/',$url);

$controller = $urlArr[0];
$urlMethod = $urlArr[0];
$urlParams = "";

if(!empty($urlArr[1])){
    if($urlArr[1] != ""){
        $urlMethod = $urlArr[1];
    }
}

if(!empty($urlArr[2])){
    if($urlArr[2] != ""){
        for ($i=2; $i < count($urlArr) ; $i++) { 
            $urlParams = $urlParams.$urlArr[$i].",";
        }
        $urlParams = trim($urlParams,',');
        
    }
}

spl_autoload_register(function($class){
    $file = "Libs/".$class.".php";
    if(file_exists($file)){
        require_once $file;
    }
});

$controller = ucwords($controller);

$controllerFile = "Controllers/".$controller.".php";

if(file_exists($controllerFile)){

    
    
    require_once ($controllerFile);    
    $controllers = new $controller();
    
    if(method_exists($controller,$urlMethod)){
        $controllers->{$urlMethod}($urlParams);
    }else{
        require_once("Controllers/Error.php");
        
    }
}else{
    require_once("Controllers/Error.php");
   
}

/*
echo "</br>";
echo "controlador: ".$controller." - metodo: ".$urlMethod;
echo "</br>";
echo "Parametros: ".$urlParams;*/

