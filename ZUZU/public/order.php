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

$producten = $query->fetchAll(PDO::FETCH_CLASS, "Customer");

?>
<div class="container" style="">
    <center>
        <?php global $Customer?>
        <?php foreach ($result as $Customer): ?>
            <?php $totalAmount = 0;?>
        <h1>Welkom <?= $Customer->fname ?> bij restaurant ZUZU</h1>
        <h3>Klik aan wat je graag zou willen bestellen</h3>
        <?php endforeach; ?>
        <?php global $Products?>
        <?php foreach ($producten as $Products): ?>
        <form method="post">
            <div class="container">
                <hr>

                <input type="checkbox" name="<?=$Products->id?>" id="<?=$Products->id?>" value="Yes" onclick="myFunction()">
                <label for="<?=$Products->id?>"><b><?=$Products->name?> || <?=$Products->price ?></b></label><br>

                <hr>

                <?php endforeach; ?>
            </div>

            <h5 id="info">0 euro</h5>
            <button type="submit" name="selectioncomplete" class="registerbtn" onclick="myFunction2()">Klaar!</button>
        </form>

    </center>

</div>
<div class="container2">
    <?php
    $gekozenProducten = array();
    if(isset($_POST['selectioncomplete'])){
        foreach ($producten as $Products){
            if(isset($_POST[$Products->id]) &&
                $_POST[$Products->id] == 'Yes')
            {
                array_push($gekozenProducten, $Products->id);
            }
        }
        $_SESSION['order'] = $gekozenProducten;
        header("Location:/ZUZU/public/ordercomplete.php");;
    }
    ?>
</div>


<script type="text/javascript">
    function myFunction() {
        let totalamount = 0;
        <?php foreach ($producten as $Products): ?>
        if(document.getElementById('<?=$Products->id?>').checked) {

            if(<?= $Products->amount ?> == 0){
                alert("Dit product is niet op voorraad");
                document.getElementById("<?=$Products->id?>").checked = false;

            }
            else{
                totalamount= totalamount+<?= $Products->price ?>;
                document.getElementById("info").innerHTML = totalamount + " euro";
                console.log(totalamount)
            }

        }
        else{

        }
        <?php endforeach; ?>
    }
    function myFunction2(){
        document.querySelector(".container").classList.toggle(".inv")
    }

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>