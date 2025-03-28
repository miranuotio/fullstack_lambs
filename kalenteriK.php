<!--Header-->
<?php require "header.php"; ?>


      <title>GIGS</title>
    </head>
<body>
   <div class="container">
        <br>
      <h1 style="text-align: center; margin-top: 5px;">GIGS</h1>
      
   <table style="border: solid black; margin-top: 1px;" class="table table-striped">
      <tr>
         <th>ID</th>
         <th>DATE</th>
         <th>CITY</th>
         <th>PLACE</th>
         <th>TIME</th>
         <th>EDIT</th>
         <th>DELETE</th>
      </tr>
        <tr>
            <?php
              include('kalenteriListausK.php');
              
              $lambs = json_decode($JSON, true);
              
              
              if(count($lambs) != 0){
                foreach($lambs as $key){
                  foreach($key as $kalenteri){
                    ?>  
                  <tr>
                    <td><?php echo $kalenteri ['keikkaid']; ?></td><br>
                    <td><?php echo $kalenteri ['PVM']; ?></td>
                    <td><?php echo $kalenteri ['Kaupunki']; ?></td>
                    <td><?php echo $kalenteri ['Paikka']; ?></td>
                    <td><?php echo $kalenteri ['Klo']; ?></td>
                    <td ><?php echo '<a href="muokkausKalenteri.php?keikkaid='.$kalenteri['keikkaid'].'" class="btn btn-primary" style="background-color: black; border: solid black;">EDIT</a>' ; ?></td>
                    <td><?php echo '<a href="poistaKalenteri.php?keikkaid='.$kalenteri['keikkaid'].'" class="btn btn-primary" style="background-color: black; border: solid black;">DELETE</a>' ; ?></td>
                    <!--Buttonin nimi "laheta"-->
                  </tr>
                  
                  <?php

                  }
                }
              }
            ?>             
            
    </table><br><br>
    <div><a href="uusiKalenteri.php" class="btn btn-primary" style="background-color: black; border: solid black;">ADD NEW</a>
    
  </div> <br> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

 



    </body>
            <!-- Footer-->
            <?php require "footer.php"; ?>
 
</html>

