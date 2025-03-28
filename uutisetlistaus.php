<?php

//header("Access-Control-Allow-Origin: *");

include('connect.php');

$kysely = "SELECT pvm, otsikko, sisalto FROM uutiset ORDER BY pvm";
$data = $yhteys->query($kysely);

$JSON = '{"uutiset":[';
$laskuri = 0; 
$riveja = $data->rowCount();
while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
    //echo $rivi['etuNimi'] . " " . $rivi['sukuNimi'] . " " . $rivi['sposti'] . " " . $rivi['puhelin'] . "<br>";
    $laskuri++;
    $JSON.= '{"PVM":"'.$rivi['pvm'].'","Otsikko":"'.$rivi['otsikko'].'","Sisalto":"'.$rivi['sisalto'].'"}';
    if($laskuri<$riveja) $JSON.=",";
}

$JSON.=']}';
$yhteys = null;

$handler = fopen("datau.json", "w");
fwrite($handler, $JSON);
fclose($handler);

//echo $JSON;

?>