<?php
function checkreg():bool
{

    $db = new PDO("mysql:host=localhost;dbname=zuzu","root", "");
    $fname=filter_input(INPUT_POST, 'fname');
    $lname=filter_input(INPUT_POST,'lname');
    $address=filter_input(INPUT_POST,'address');
    $city=filter_input(INPUT_POST,'city');
    $zipcode=filter_input(INPUT_POST,'zipcode');

    if(!empty($fname) && !empty($lname) && !empty($address) && !empty($city) && !empty($zipcode)) {
        $sql = "INSERT INTO `customer`(`id`, `fname`, `lname`, `address`, `city`, `zipcode`) VALUES ('','$fname','$lname','$address','$city','$zipcode')";
        $sth = $db->prepare($sql);
        $geregistreerd = $sth->execute();
        session_start();
        $_SESSION['customer'] = $zipcode;
        return true;
    }
    else{
        return false;
    }
}
?>


