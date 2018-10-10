<?php
//include_once 'config/config.php';
//include 'includes/header.php';
$user = new User();
?>

<!-- Login -->
<div id="login">
    <?php
    if($user->isLoggedIn()){
        ?>

        <p> Je bent ingelogd als <?=$_SESSION['user']['username'] ?>. <a href="logout.php">Uitloggen</a></p>

        <?php
    } else {
        ?>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="email">
            <input type="password" name="secret">
            <input type="submit" value="Login">
        </form>
        <p> Geen account? <a href="register.php"> Registreer hier!</a></p>
        <?php
    }
    ?>
</div>