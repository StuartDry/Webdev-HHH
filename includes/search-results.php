<!-- link voor icons -->
<?php
if(!isset($_SESSION['cart'])) {
    $array = array();
    $_SESSION['cart'] = $array;
}
if(isset($_POST['submit'])){
    $array=$_SESSION['cart'];
    $check_in=$_POST['check-in_date'];
    $check_out=$_POST['check-out_date'];
    $homeID=$_POST['homeID'];
//TODO zorgen dat er maar 1 huisje per keer geboekt kan worden?
    if($check_in!=null && $check_out!=null && $homeID!=null) {
        $productarray = array($homeID, $check_in, $check_out);
        array_push($array, $productarray);
        $_SESSION['cart'] = $array;
    }else echo '<p class="btn btn-danger">Something went wrong, please refresh the page and try again.</p>';
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "</pre>";
}
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<?php //https://bootsnipp.com/snippets/O50pZ ?>
<div class="mt-5"></div>
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb m-0 p-0 pt-2">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>

                </ul>
            </div>
        </div>
    </div>
</section>
<section class="listings">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Search</h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form>
                                            <div class="form-group">
                                                <select class="form-control" id="conditionsselect1">
                                                    <option>Nederland</option>
                                                    <option>Belgie</option>
                                                    <option>Japan</option>
                                                    <option>Rusland</option>
                                                    <option>Antartica</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="conditionsselect2">
                                                    <option>Body</option>
                                                    <option>Compact</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="make1">
                                                    <option>4 gast</option>
                                                    <option>6 gasten</option>
                                                    <option>12 gasten</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="make1">
                                                    <option>Silver</option>
                                                    <option>Gold</option>
                                                </select>
                                            </div>
                                            <hr>
                                            <button type="btn" class="btn btn-primary">Find Now</button>
                                            <button type="btn" class="btn btn-primary">Reset All</button>
                                            <div class="pb-3"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h2>  X properties found in locationY </h2>
                        <p> 3 Reasons to Visit: Beachsports, entertainment & relaxation </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-justified nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light" href="#">Active</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-light" href="#">Active</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <?php
                include 'Classes/Search.php';

                $search = new Search();
                $results = $search->getResults();
                echo $results;
                ?>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <small> X properties found in LocationY.  </small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cta py-5 bg-primary text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>Save time, save money!</h2>
                <p> Sign up and we'll send the best deals to you </p>
            </div>
        </div>
    </div>
</section>
<section class="cta-btm py-2 bg-info">
    <div class="row text-center">
        <div class="col-md-12 ">
            <button type="button" class="btn btn-outline-light">Book Now</button>
            <button type="button" class="btn btn-outline-light">Sell Services</button>
        </div>
    </div>
</section>