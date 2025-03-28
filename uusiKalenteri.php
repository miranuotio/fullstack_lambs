<!--Header-->
<?php require "header.php"; ?>


    <body>
        <br>
     <div class="container">
        <h1 style="text-align: center;">ADD NEW </h1>

    
        <table class="table-bordered" style="text-align: center; margin-left: 400px; margin-top: 30px;">
            <form action="lisaaKalenteri.php" method="POST">
                <tr>
                    <td>CITY: </td>
                    <td><input type="text" style="width: 400px;" name="kaupunki"></td>
                </tr>
                <tr>
                    <td>PLACE: </td>
                    <td><input type="text" style="width: 400px;" name="paikka"></td>
                </tr>
                <tr>
                    <td>TIME: </td>
                    <td><input type="number" style="width: 400px;" name="klo"></td>
                </tr>
                <tr><br>
                    <td></td><br><br>
                    <td><button name="tallenna" type="submit" class="btn btn-primary" style="background-color: black; border: solid black; margin-top: 30px;">ADD</button></td>
                </tr>
            </form>
        </table>
     </div>

     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

             <!-- Footer-->
             <?php require "footer.php"; ?>
    </body>
</html>