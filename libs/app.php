<?php
class App{
    function __construct()
    {
        echo " <p>Mi aplicacion MVC de WEB II";
        //leogica en la url
        $url = $_GET['url'];
        echo "<br>";    
        echo $url;
        $url = explode("/", $url);
        echo"<br>";
        echo $url[0];
        echo "<br>";
        echo "<br>";
        //Llamamos al controlador
        $ruta = "controllers/".$url[0].".php";
        require_once $ruta;
        $c = new $url[0];
    }
}

?>