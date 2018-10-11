<?php
if (isset($_POST['submit'])){
    $email = trim($_REQUEST['email']);
    $pass = trim($_REQUEST['pass']);
    $user = new User();
    $result = $user->login($email,$pass);
    if( $user->login($_REQUEST['email'], $_REQUEST['pass'])){
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
                    <label for="email" style="font-size: 26px;">Email</label>
                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Enter E-mail">
                </div>
                <div class="form-group">
                    <label for="password" style="font-size: 26px;">Password</label>
                    <input type="password" class="form-control form-control-lg" name="pass" placeholder="Enter Password">
                </div>
                <div class="form-group text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>