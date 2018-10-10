<?php
include_once 'includes/header.php';
include 'Classes/User.php';
include 'Classes/Database.php';
if (isset($_POST['submit'])){
    $name = trim($_REQUEST['username']);
    $pass1 = trim($_REQUEST['pass1']);
    $user = new User();
    $result = $user->login($name,$pass1);
    if( $user->login($_REQUEST['username'], $_REQUEST['pass1'])){
        header( 'Location: ./');
        echo "Succes!";
        exit;
    } else {
        echo '<h1 style="text-align: center; color: red;">Login mislukt!</h1><p style="text-align: center; color: red;">Vul a.u.b. uw gegevens opnieuw in.</p>';
    }
}
?>

<div class="container LM">
    <div class="row justify-content-sm-center align-middle">
        <div class="col-xs">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="username" style="font-size: 26px;">Username</label>
                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="password" style="font-size: 26px;">Password</label>
                    <input type="password" class="form-control form-control-lg" name="pass1" placeholder="Enter Password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>