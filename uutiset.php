<!--Header-->
<?php require "header.php"; ?>

<title>NEWS</title>
    </head>
<body>

   <div class="container">
        <br>
      <h1 style="text-align: center;">NEWS</h1>
      
   <table style="border: solid black;" class="table table-striped">
      <tr>
         <th>DATE</th>
         <th>TITLE</th>
         <th>WHATS UP</th>
         <th>LINK</th>
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
            
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <!-- Footer-->
            <?php require "footer.php"; ?>
    </body>
</html>