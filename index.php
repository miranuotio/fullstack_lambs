<!--Header-->
<?php require "header.php"; ?>

            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">LAMBS</h1>
                                <p style="color: white">Lambs is a Finnish rock band that has been making music since 1994. <br> 
                                    The band was formed in Tornio, Finland. <br><br>
                                    The band consists of A. Lindholm on guitar and vocals, Timo on drums,
                                    and Tommy on bass.<br><br>
                                    Lambs’ sound is a unique blend of rock, metal and punk synthesizing influences from bands
                                    like Motörhead, Corrosion of Conformity, Danzig, Iron Maiden, AC/DC, Kiss, and the
                                    Ramones. The band’s music has been described by its raw energy, robust riffs and strong
                                    melodic sense.</p>
                                
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/b1.jpg" alt="Lambs" /></div>
                    </div>
                </div>
            </header>
    <div>

            <div class="container">
              
      <!--<p><a href="#" class="btn btn-primary">Lisää jäsen</a></p>-->
      

        <!--<table class="table table-striped">
        <tr>
         <th>PVM</th>
         <th>Otsikko</th>
         <th>Sisältö</th>
        </tr>
            <tr>
            <?php
              include('uutisetlistaus.php');
              //$json_data = file_get_contents("data.json");
              //$jasenet = json_decode($json_data, true);
              $lambs = json_decode($JSON, true);
              
              //count laskee, että onko dataa ylipäätään
              //ekassa osassa haetaan se rivi, jolla tietoa on jne
              if(count($lambs) != 0){
                foreach($lambs as $key){
                  foreach($key as $uutiset){
                    ?>  
                  <tr>
                    <td><?php echo $uutiset ['PVM']; ?></td>
                    <td><?php echo $uutiset ['Otsikko']; ?></td>
                    <td><?php echo $uutiset ['Sisalto']; ?></td>
                  </tr>
                  
                  <?php

                  }
                }
              }
            ?>             
            
    </table> -->
            </div><br><br>



                    
<div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">          
        <div style="width: 500px; height: 200px; box-sizing: border-box; margin: 0px 5px 25px 10px; background-image: url(img/k3.jpg);"><h2 style="padding-top: 25px; padding-right: 500px; padding-bottom: 50px; padding-left: 1px; color: white;"><h2><a style="color:white;" href="kalenteri.php">GIGS</a></h2></div>
        <div style="width: 500px; height: 200px; box-sizing: border-box; margin: 0px 5px 25px 10px; background-image: url(img/k2.jpg);"><h2 style="padding-top: 25px; padding-right: 5px; padding-bottom: 50px; padding-left: 1px; color: white;"><h2><a style="color:white;" href="uutiset.php">NEWS</a></h2></div> 
    </div>
    <div class="row gx-5 justify-content-center">          
        <div style="width: 500px; height: 200px; box-sizing: border-box; margin: 0px 5px 25px 10px; background-image: url(img/k1.jpg);"><h2 style="padding-top: 25px; padding-right: 5px; padding-bottom: 50px; padding-left: 1px; color: white;"><h2><a style="color:white;" href="bandi.php">BAND</a></h2></div>
        <div style="width: 500px; height: 200px; box-sizing: border-box; margin: 0px 5px 25px 10px; background-image: url(img/k4.jpg);"><h2 style="padding-top: 25px; padding-right: 5px; padding-bottom: 50px; padding-left: 1px; color: white;"><h2><a style="color:white;" href="video.php">VIDEO</a></h2></div>
    </div>    
</div>        

                    
                   
        <!-- Footer-->
              <?php require "footer.php"; ?>
    </body>
</html>
