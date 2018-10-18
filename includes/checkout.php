<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 18-10-2018
 * Time: 21:18
 */?>

<div class="container checkout_container">
    <form action="" method="post">
        <div class="row">
            <div class="col-xs-2 col-sm-1">
                <?php //TODO labels aan inputs meegeven! ?>
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
            <input type="submit" class="btn btn-success checkout_btn" name="checkout_btn" value="Proceed to payment">
        </div>
    </form>
</div>