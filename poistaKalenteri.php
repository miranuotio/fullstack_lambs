<?php

require "connect.php";
if(isset($_GET['keikkaid'])){
    $keikkaid = $_GET['keikkaid'];
    $kysely = "DELETE FROM kalenteri WHERE keikkaid=:keikkaid";
    $poista = $yhteys->prepare($kysely);
    $poista->bindValue(':keikkaid', $keikkaid, PDO::PARAM_INT);
    $poista->execute();
    
}

header("location:kalenteriK.php")


?>

