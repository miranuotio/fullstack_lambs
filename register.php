

<?php require "connect.php"; ?>

<?php 


 //submit on painikkeen nimi, jonka toimintaa seurataan. Jos tunnusta tms ei ole niin tulee il. "joitain puuttuu"
 //jos tunnus on oikein niin ohjelma tallentaa muuttujiin kirjatumistiedot
  if(isset($_POST['submit'])){

    if($_POST['email'] == ''OR $_POST['username'] == '' OR $_POST['password'] == ''){
      echo "jotain uupuu";
    }else{
      $sposti = $_POST['email'];
      $tunnus = $_POST['username'];
      $salasana = $_POST['password'];

      $lisays = "INSERT INTO kayttajat (sposti, tunnus, salasana) VALUES (:sposti, :tunnus, :salasana)";
      $lisaa = $yhteys->prepare($lisays);
      $lisaa->execute([
        ':sposti' => $sposti,
        ':tunnus' => $tunnus,
        ':salasana' => password_hash($salasana, PASSWORD_DEFAULT), //kryptattu salasana
      ]);
    }
  }

?>



<main class="form-signin w-50 m-auto">
  <form method="POST" action="register.php">
   
    <h1 class="h3 mt-5 fw-normal text-center">Ole hyvä ja rekisteröidy</h1>

    <div class="form-floating">
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Sähköpostiosoite</label>
    </div>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
      <label for="floatingInput">Käyttäjätunnus</label>
    </div>

    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Salasana</label>
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">rekisteröidy</button>
    <h6 class="mt-3">Jos sinulla on jo käyttäjätunnus?  <a href="login.php">Kirjaudu</a></h6>

  </form>
</main>
<?php require "includes/footer.php"; ?>