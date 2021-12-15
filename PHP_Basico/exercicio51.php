<?php
    
    setcookie("primeiroCookie", hash("sha256", "111111"), time() + 3600);
    setcookie("segundoCookie", hash("sha256", "222222"), time() + 3600);
    setcookie("terceiroCookie", hash("sha256", "333333"), time() + 7200);
    setcookie("quartoCookie", hash("sha256", "444444"), time() + 7200);
    
    $listaDeCookies = [];
    
    $listaDeCookies["primeiroCookie"] = $_COOKIE["primeiroCookie"];
    $listaDeCookies["segundoCookie"] = $_COOKIE["segundoCookie"];
    $listaDeCookies["terceiroCookie"] = $_COOKIE["terceiroCookie"];
    $listaDeCookies["quartoCookie"] = $_COOKIE["quartoCookie"];


    $json = json_encode($listaDeCookies);
    
    $file = fopen("cookies.txt", "w");
    
    fwrite($file, $json);
    
    fclose($file);
?>