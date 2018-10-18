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
            <label for="email" style="font-size: 26px;">Email</label>
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
            <label for="password" style="font-size: 26px;">Password</label>
            <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
            <!--<input type="submit" class="fadeIn fourth" value="Log In">-->
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
</div>