<?php 
    //header('Content-Type:text/html; charset=utf-8');

try{
    $palvelin = "localhost";
    $tietokanta = "lambs";
    $tunnus = "root";
    $salasana = "";

    $yhteys = new PDO("mysql:host=$palvelin;dbname=$tietokanta", $tunnus, $salasana);
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Jeejee";

}
catch(PDOException $e){
    echo "Virhe!! " . $e->getMessage();
}
?>