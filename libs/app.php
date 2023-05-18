<?php
class App{
    function __construct()
    {
        echo " <p>Mi aplicacion MVC de WEB II";
        //leogica en la url
        $url = $_GET['url'];
        echo "<br>";
        echo $url;
    }
}

?>