<?php 
    require "connect.php";

    if(isset($_GET['keikkaid'])){
        $keikkaid = $_GET['keikkaid'];
        $kysely = "SELECT keikkaid, pvm, kaupunki, paikka, klo FROM kalenteri WHERE keikkaid='$keikkaid'";
        $data = $yhteys->query($kysely);
        $rivi = $data->fetch(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Henkilötiedot</title>
    </head>
    <body>
     <div class="container">
        <h1>Kalenteri</h1>
        <a href="kalenteriK.php" class="btn btn-primary">Takaisin käyttäjän kalenteriin</a>
        <a href="index.php" class="btn btn-primary">Etusivu</a></p>
        <div><h1><b>TÄHÄN IDN KAUTTA TIEDOT</b></h1></div>
        <h3>Muokkaa tapahtumaa</h3>
        <table class="table table-striped">
      <tr>
         <th>ID</th>
         <th>PVM</th>
         <th>Kaupunki</th>
         <th>Paikka</th>
         <th>Klo</th>
      </tr>
        <tr>
                  <tr>
                    <td><?php echo $rivi ['keikkaid']; ?></td>
                    <td><?php echo $rivi ['pvm']; ?></td>
                    <td><?php echo $rivi ['kaupunki']; ?></td>
                    <td><?php echo $rivi ['paikka']; ?></td>
                    <td><?php echo $rivi ['klo']; ?></td>
                    
                    <!--Buttonin nimi "laheta"-->
                  </tr>
                  
                  <?php                 
            ?>
        <table class="table-bordered">
            <form action="muokkaaKalenteri.php" method="POST">
            <input type="hidden" name="keikkaid" value=<?php echo $rivi['keikkaid'] ?>'>
                <tr>
                    <td>Kaupunki: </td>
                    <td><input type="text" name="kaupunki"></td>
                </tr>
                <tr>
                    <td>Keikkapaikka: </td>
                    <td><input type="text" name="paikka"></td>
                </tr>
                <tr>
                    <td>Keikka alkaa klo: </td>
                    <td><input type="number" name="klo"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button name="laheta" type="submit" class="btn btn-primary">Julkaise</button></td>
                </tr>
            </form>
        </table>
     </div>

             <!-- Footer-->
             <?php require "footer.php"; ?>
    </body>
</html> 