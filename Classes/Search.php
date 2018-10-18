<?php
/**
 * Created by PhpStorm.
 * User: Iris
 * Date: 18-10-2018
 * Time: 12:22
 */

class Search
{

    public function __construct(){

    }

    public function getResults(){
        if(!isset($_SESSION['cart'])) {
            $array = array();
            $_SESSION['cart'] = $array;
        }
        $ret = '';


        $db = Database::getInstance();
        $conn = $db->getConnection();

        $sql="SELECT * FROM home, park WHERE home.parkID=park.parkID";
        $result=$conn->query($sql);

        while( $row = mysqli_fetch_array($result) ) {
            $homeID=$row['homeID'];

            //maak de html van het zoekresultaat
            $ret.= '
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="https://dynamic.realestateindia.com/proj_images/project14122/proj_img-14122_1-small.jpg">
                                    </div>
                                    <div class="col-md-5  card-body">
                                        <div class="list-title">
                                            <ul class="list-inline list-unstyled">
                                                <li class="list-inline-item"><a href="#">'. $row['home_name'] .'</a></h4></a></li>
                                                <li class="list-inline-item text-warning"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li> '. $row['edition'] .'
                                            </ul>
                                        </div>
                                        <p>&euro;'. $row['price'] .'</p>
                                        <div class="list-location">
                                            <a href="#"><i class="fa fa-map-marker"></i><small> '. $row['location'] .'</small> </a>
                                        </div>
                                        <div class="list-descrip">
                                            <small>'. $row['home_description'] .'</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4 border-left card-body">
                                        <form action="" method="post">
                                            <label>Check in:
                                                <input type="date" name="check-in_date">
                                            </label>
                                            <label>Check out:
                                                <input type="date" name="check-out_date">
                                            </label>
                                            <b><p>Max. number of guests: '. $row['capacity'] .'</p></b>
                                            <input type="submit" name="submit" class="btn btn-outline-primary" value="Book now">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            ';

            if(isset($_POST['submit'])){
                $check_in=$_POST['check-in_date'];
                $check_out=$_POST['check-out_date'];

                $array=$_SESSION['cart'];
                $productarray=array($homeID, $check_in, $check_out);
                array_push($array, $productarray);
                $_SESSION['cart']=$array;
                echo "<pre>";
                print_r($_SESSION['cart']);
                echo "</pre>";
            }
        }

        return $ret;
    }

}