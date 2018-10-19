<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 18-10-2018
 * Time: 21:18
 */
include 'Classes/Order.php';
if(isset($_POST['checkout_btn'])){
    $userID=$_SESSION['user']['userID'];
    $parkID = 1;
    $homeID=$_SESSION['cart'][0][0];
    $checkin_date=$_SESSION['cart'][0][1];
    $checkout_date=$_SESSION['cart'][0][2];

//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";

    $order = new Order();
    $result=$order->saveOrder($userID, $parkID, $homeID, $checkin_date, $checkout_date);
    if(!$result){
        echo "Boeken mislukt.";
    }
}
?>

<div class="container checkout_container">
    <form action="" method="post">
        <div class="row">
            <div class="col-xs-2 col-sm-1">
                <?php //TODO labels aan inputs meegeven! radio buttons kunnen nu tegelijk worden ingedrukt... ?>
                <input type="radio" name="ideal_payment">
            </div>
            <div class="col-xs-10 col-sm-11">
                <select name="bank_options">
                    <option>ING</option>
                    <option>ABN</option>
                    <option>Rabo</option>
                </select>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-2 col-sm-1">
                <input type="radio" name="creditcard_payment">
            </div>
            <div class="col-xs-10 col-sm-11">
                Only VISA or MasterCard accepted
            </div>
        </div>
        <div class="row">
            <form action="" method="post">
                <input type="submit" class="btn btn-success checkout_btn" name="checkout_btn" value="Proceed to payment">
            </form>
        </div>
    </form>
</div>