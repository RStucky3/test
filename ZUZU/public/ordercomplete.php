
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
<?php
session_start();
var_dump($_SESSION['customer']);
$zipcode = $_SESSION['customer'];
include_once ("../Classes/Customer.php");
$db = new PDO("mysql:host=localhost;dbname=zuzu","root","");

$query = $db->prepare("SELECT * FROM `customer` WHERE `zipcode` = '$zipcode'");

$query->execute();

$result = $query->fetchAll(PDO::FETCH_CLASS, "Customer");

?>
<?php
include_once ("../Classes/Products.php");

$query = $db->prepare("SELECT * FROM `sushi`");

$query->execute();

$producten = $query->fetchAll(PDO::FETCH_CLASS, "Products");

?>
<div class="container" style="">
    <center>
        <?php global $Customer?>
        <?php foreach ($result as $Customer): ?>
            <h1>Bedankt <?= $Customer->fname ?> voor het bestellen bij restaurant ZUZU</h1>
        <hr>
            <h3>Orderbevestiging:</h3>

            <h4>Voornaam: <?= $Customer->fname ?> </h4>
            <h4>Achternaam: <?= $Customer->lname ?> </h4>
            <h4>Adres: <?= $Customer->address ?> </h4>
            <h4>postcode: <?= $Customer->zipcode ?> </h4>
<hr>
            <h3>Bestelling:</h3>

        <?php endforeach; ?>
        <?php $totalAmount = 0 ?>
        <?php foreach ($_SESSION['order'] as $orderedProducts): ?>
            <h4><?= $producten[$orderedProducts-1]->name ?> || <?= $producten[$orderedProducts-1]->price ?></h4>
            <?php $totalAmount = $totalAmount + $producten[$orderedProducts-1]->price  ?>
        
            <?php

            $tempId = $producten[$orderedProducts-1]->id;
            $newAmount = $producten[$orderedProducts-1]->amount-1;
            $query = $db->prepare("UPDATE `sushi` SET `amount`='$newAmount' WHERE `id` = '$tempId' ");
            $query->execute();
            ?>

        <?php endforeach; ?>
        <h4>Totaal: <?= $totalAmount ?> euro</h4>
        <hr>
        <?php global $Customer?>
        <?php foreach ($result as $Customer): ?>
            <h3>We komen eraan!</h3>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $Customer->zipcode  ?>>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embedding google map in website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

        <?php endforeach; ?>



    </center>

</div>
<?php
if(isset($_POST['selectioncomplete'])){
    header("Location:/ZUZU/public/ordercomplete.php");
}
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
