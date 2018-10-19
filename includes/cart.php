<?php

if(!isset($_SESSION['cart'])) {
    $array = array();
    $_SESSION['cart'] = $array;
}

$array=$_SESSION['cart'];

if(!isset($_SESSION['user']) && !isset($_SESSION['email'])){
    ?>
    <div class="container">
        <p>
            <b>Om een boeking te voltooien moet je zijn ingelogd.</b>
        </p>
        <div class="row cart_row">
            <a href="./signup" class="btn btn-warning col-xs-12 col-sm-6">Klik hier om een account aan te maken.</a>
            <a href="./login" class="btn btn-primary col-xs-12 col-sm-6">Klik hier om in te loggen.</a>
        </div>
    </div>
    <?php
}else {
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";
    ?>
    <div class="container cart_container">
        <?php //TODO tekst blabla stpom project? ?>
        <p>Home: <?php echo $array[0][0] ?></p>
        <p>Check-in date: <?php echo $array[0][1] ?></p>
        <p>Check-out date: <?php echo $array[0][2] ?></p>
        <hr>
        <p>Full name: <?php echo $_SESSION['user']['first_name']." ".$_SESSION['user']['prefix']." ".$_SESSION['user']['last_name'] ?></p>
        <p>E-mail: <?php echo $_SESSION['user']['email'] ?></p>
        <p>Phonenumber: <?php $_SESSION['user']['phonenumber'] ?></p>
        <?php //TODO link naar account niet zichtbaar-->andere kleur! ?>
        <p>To edit ..., please visit your <a href="account">account</a></p>
        <a href="checkout" class="btn btn-success cart_button">Proceed</a>
    </div>
    <?php
}


////print_r($array);
//echo "<pre>";
//print_r($array);
//echo "</pre>";