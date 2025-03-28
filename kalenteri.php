<!--Header-->
<?php require "header.php"; ?>


      <title>GIGS</title>
    </head>
<body>
   <div class="container">
        <br>
      <h1 style="text-align: center; margin-bottom: 15px;">GIGS</h1>
      
      
   <table style="border: solid black;" class="table table-striped">
      <tr>
         <th>DATE</th>
         <th>CITY</th>
         <th>PLACE</th>
         <th>TIME</th>
      </tr>
        <tr><br>
            <?php
              include('kalenterilistaus.php');
              //$json_data = file_get_contents("data.json");
              //$jasenet = json_decode($json_data, true);
              $lambs = json_decode($JSON, true);
              
            
              if(count($lambs) != 0){
                foreach($lambs as $key){
                  foreach($key as $kalenteri){
                    ?>  
                  <tr>
                    <td><?php echo $kalenteri ['PVM']; ?></td>
                    <td><?php echo $kalenteri ['Kaupunki']; ?></td>
                    <td><?php echo $kalenteri ['Paikka']; ?></td>
                    <td><?php echo $kalenteri ['Klo']; ?></td>
                  </tr>
                  <!--HALUTAANKO PERÄÄN OSTA LIPUT -LINKKI?-->
                  
                  <?php



                  }
                }
              }
            ?>  
                     
            
    </table> <br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </div> </div>  


        <!-- Footer-->
        <?php require "footer.php"; ?>         

    </body>
    
</html>


