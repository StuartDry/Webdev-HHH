<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 19-10-2018
 * Time: 14:13
 */

class Order
{


    public function __construct(){

    }

    public function saveOrder($userID, $parkID, $homeID, $checkin_date, $checkout_date){

        $db = Database::getInstance();
        $conn = $db->getConnection();

        $sql='INSERT INTO `order` (userID, parkID, homeID, `check-in_date`, `check-out_date`) VALUES 
        ("'.$conn->real_escape_string($userID).'", 
        "'.$conn->real_escape_string($parkID).'", 
        "'.$conn->real_escape_string($homeID).'", 
        "'.$conn->real_escape_string($checkin_date).'", 
        "'.$conn->real_escape_string($checkout_date).'"
        )';
        if($conn->query($sql)){
            echo "Boeken gelukt.";
            return $conn->insert_id;
        }else{
            var_dump($sql);
            echo("Error description: " . mysqli_error($conn));
        }
        return false;
    }
}