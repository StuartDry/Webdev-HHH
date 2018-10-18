<div class="mt-5"></div>
<section class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb m-0 p-0 pt-2">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Fruit</a></li>
                    <li class="breadcrumb-item active">Pears</li>
                </ul>
            </div>
        </div>
    </div>
</section>

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

<link rel="stylesheet" href="css/login.css">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="./images/icons/icon.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form method="POST" action="">
            <!--<label for="email" style="font-size: 26px;">Email</label>-->
            <input type="text" id="login" class="fadeIn second" name="first_name" placeholder="Enter First Name">
            <!--<label for="password" style="font-size: 26px;">Password</label>-->
            <input type="text" id="password" class="fadeIn third" name="prefix" placeholder="Enter Prefix">
            <!--<label for="password" style="font-size: 26px;">Password</label>-->
            <input type="text" id="password" class="fadeIn third" name="last_name" placeholder="Enter Last Name">
            <!--<label for="password" style="font-size: 26px;">Password</label>-->
            <input type="text" id="password" class="fadeIn third" name="email" placeholder="Enter E-mail">
            <!--<label for="password" style="font-size: 26px;">Password</label>-->
            <input type="text" id="password" class="fadeIn third" name="pass1" placeholder="Enter Password">
            <!--<label for="password" style="font-size: 26px;">Password</label>-->
            <input type="text" id="password" class="fadeIn third" name="pass2" placeholder="Repeat Password">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>