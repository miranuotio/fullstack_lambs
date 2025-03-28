<?php

header("Access-Control-Allow-Origin: *");

include('connect.php');

$kysely = "SELECT pvm, kaupunki, paikka, klo FROM kalenteri ORDER BY pvm";
$data = $yhteys->query($kysely);

$JSON = '{"kalenteri":[';
$laskuri = 0; 
$riveja = $data->rowCount();
while($rivi = $data->fetch(PDO::FETCH_ASSOC)){
    //echo $rivi['etuNimi'] . " " . $rivi['sukuNimi'] . " " . $rivi['sposti'] . " " . $rivi['puhelin'] . "<br>";
    $laskuri++;
    $JSON.= '{"PVM":"'.$rivi['pvm'].'","Kaupunki":"'.$rivi['kaupunki'].'","Paikka":"'.$rivi['paikka'].'","Klo":"'.$rivi['klo'].'"}';
    if($laskuri<$riveja) $JSON.=",";
}

$JSON.=']}';
$yhteys = null;

$handler = fopen("data.json", "w");
fwrite($handler, $JSON);
fclose($handler);

//echo $JSON;

?>