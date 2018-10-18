<?php

/*
 *
 * $park = new Park( 1 );
 *
 *
 * */


class Park {
    public $parkID;


    public function __construct( $parkID = '' ){
      $this->parkID = $parkID;
    }

    public function getName(){

    }

    public function getLocation(){

    }

    public function getDescription(){

    }

    public function getHomes(){
        $db = Database::getInstance();
        $conn = $db->getConnection();
        $sql="SELECT * FROM home WHERE parkID=".$this->parkID;

    }
}
?>