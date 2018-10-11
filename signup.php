<?php
if (isset($_POST['submit'])){
//    $name = trim($_REQUEST['username']);
    $email = trim($_REQUEST['email']);
    $pass1 = trim($_REQUEST['pass1']);
    $pass2 = trim($_REQUEST['pass2']);
    $first_name = trim($_REQUEST['first_name']);
    $prefix = trim($_REQUEST['prefix']);
    $last_name = trim($_REQUEST['last_name']);
    $phonenumber = "";
    $newsletter = 0;
    // todo : valideer e-mail adres
    //todo : vriendelijkere foutmelding
    if (strcmp($pass1, $pass2 ) !== 0 || strlen ($pass1) == 0) {
        die ("Wachtwoorden zijn niet gelijk");
    };
    $user = new User();
    var_dump($email, $first_name, $prefix, $last_name, $phonenumber, $newsletter);
    $result = $user->register($email, $first_name, $prefix, $last_name, $phonenumber, $newsletter, $pass1);
    if ($result === false ){
        die ("Account aanmaken is niet gelukt");
    } else {
        echo '<h1 style="text-align: center; color: green;">Account aanmaken gelukt!</h1>';
    }
}
?>

<div class="container LM">

    <div class="row justify-content-sm-center">
        <form method="POST" action="">
            <div class="form-group">
                <label for="first_name" style="font-size: 26px;">First Name</label>
                <input type="text" class="form-control form-control-lg" name="first_name" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="prefix" style="font-size: 26px;">Prefix</label>
                <input type="text" class="form-control form-control-lg" name="prefix" placeholder="Enter Prefix">
            </div>
            <div class="form-group">
                <label for="last_name" style="font-size: 26px;">Last Name</label>
                <input type="text" class="form-control form-control-lg" name="last_name" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="email" style="font-size: 26px;">E-mail address</label>
                <input type="email" class="form-control form-control-lg" name="email" placeholder="Enter E-mail">
            </div>
            <div class="form-group">
                <label for="pass1" style="font-size: 26px;">Password</label>
                <input type="password" class="form-control form-control-lg" name="pass1" placeholder="Repeat Password">
            </div>
            <div class="form-group">
                <label for="pass2" style="font-size: 26px;">Repeat Password</label>
                <input type="password" class="form-control form-control-lg" name="pass2" placeholder="Enter Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</div>