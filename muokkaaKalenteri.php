<?php
require "connect.php";

if(isset($_GET['upd_id'])){ //mistä tämä nimi tulee/haetaan?
    $keikkaid = $_GET['upd_id'];
    $kysely   = "SELECT * FROM kalenteri WHERE keikkaid = '$keikkaid'";
    $data     = $yhteys->query($kysely);
    $rivit    = $data->fetch(PDO::FETCH_OBJ);
}

if(isset($_POST['laheta'])){
    $tehtava = $_POST['kalenterit']; //mistä tämä nimi tulee? Inputista?
    $kysely  = "UPDATE kalenteri SET pvm = :pvm, kaupunki = :kaupunki, paikka = :paikka, klo = :klo WHERE keikkaid = '$keikkaid'";
    $muuta   = $yhteys->prepare($kysely);
    $muuta->execute([':pvm']); // USEAMPI MUUTTUJA!? 

}


?>