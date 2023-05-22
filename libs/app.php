<?php
class App{
    function __construct()
    {
        echo " <p>Mi aplicacion en WEB II";
        //leogica en la url
        $url = $_GET['url'];
        echo "<br>";
        echo $url;
        $url=explode("/", $url);
        echo "<br>";
        echo $url[0];
        echo "<br>";

        //llamamos al controlador
        $ruta="controllers/".$url[0].".php";
        echo $ruta;
        echo "<br>";
        if (file_exists($ruta)){
            require_once $ruta;
            $c = new $url[0];
        }else{
            require_once "controllers/errores.php";
            $e= new Errores();
        }
        //echo "Ruta:".$ruta;


    }
}

?>