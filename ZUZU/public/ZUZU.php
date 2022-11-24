<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="ZUZU.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="contrainer">
            <center>
                <h1>Welkom bij restaurant ZUZU</h1>
                <h3>Wil je iets bestellen?</h3>
                <h4>Voer hier je gegevens in:</h4>
                <form method="post">
                    <div class="container">
                        <hr>

                        <label for="fname"><b>Voornaam</b></label>
                        <input type="text" placeholder="Voornaam" name="fname" id="fname" required>

                        <label for="lname"><b>Achternaam</b></label>
                        <input type="text" placeholder="Achternaam" name="lname" id="lname" required>

                        <label for="address"><b>Adres</b></label>
                        <input type="text" placeholder="Adres" name="address" id="address" required>

                        <label for="city"><b>Stad</b></label>
                        <input type="text" placeholder="Stad" name="city" id="city" required>

                        <label for="zipcode"><b>Postcode</b></label>
                        <input type="text" placeholder="Postcode" name="zipcode" id="zipcode" required>

                        <hr>

                        <button type="submit" name="registrerensubmit" class="registerbtn">Klaar!</button>
                    </div>

            </center>

        </div>

        <?php
        include_once ('../Modules/checkreg.php');
        if(isset($_POST['registrerensubmit'])){
            if(checkreg()==true){
                header("Location:/ZUZU/public/order.php");;
            }
            else{
                echo "<center><h3 style='color: red'>Niet alles is ingevuld</h3></center>";
            };
        }
        ?>


        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>