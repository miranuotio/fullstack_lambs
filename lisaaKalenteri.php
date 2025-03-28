<?php


require "connect.php";

if(isset($_POST['tallenna'])){
    $kaupunki = $_POST['kaupunki'];
    $paikka = $_POST['paikka'];
    $klo = $_POST['klo'];


    $komento = "INSERT INTO kalenteri(kaupunki, paikka, klo) VALUES (:kaupunki, :paikka, :klo)";
    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':kaupunki', $kaupunki, PDO::PARAM_STR);
    $lisaa->bindValue(':paikka', $paikka, PDO::PARAM_STR);
    $lisaa->bindValue(':klo', $klo, PDO::PARAM_INT);
    $lisaa->execute();

}
//palauttaa toiminnon jälkeen takaisin kalenterin käyttäjä-näkymään
header("location: kalenteriK.php")

?>