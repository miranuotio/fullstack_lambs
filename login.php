<?php require "connect.php"; ?>

<?php require "header.php"; ?>

<?php
        if(isset($_POST['submit'])){
          if($_POST['email'] == '' OR $_POST['password'] == ''){
            echo "Täytä kaikki tarvittavat tiedot";
          }else{
            $sposti = $_POST['email'];
            $salasana = $_POST['password'];
      
            $komento = "SELECT * FROM kayttajat WHERE sposti = '$sposti'";
            $kirjaudu = $yhteys->query($komento);
            $kirjaudu->execute();
            $data = $kirjaudu->fetch(PDO::FETCH_ASSOC);
            if($kirjaudu->rowCount() > 0){  
                //if(password_verify($salasana, $data['salasana'])){
                    if($salasana == $data['salasana']){
                  //echo "Kirjautuminen onnistui!";
                  $_session['sposti'] = $data['sposti'];
                  header("location: index.php");
                        
                }else{
                  echo "Virhe 1";
                }    
            }else{
              "Virhe 2";
            }
          }
        }
?>
    
<div>
<main class="form-signin w-50 m-auto">
  <form method="POST" action="login.php">
    <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mt-5 fw-normal text-center">Kirjaudu</h1><br>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">email</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
      <label for="floatingPassword">password</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" style="background-color: black;" type="submit">Kirjaudu</button>
    
  </form>
</main>

    
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</div>     

<div>

        <!-- Footer-->
        <?php require "footer.php"; ?>
    </body>
</html>

</div>
      


                    
                   
        









