<?php
include_once 'includes/header.php';
include 'includes/navbar.php';
?>

<?php



// Clean URLS //
$uri = $_SERVER['REQUEST_URI'];
// vewijder eventuele parameters
$uri = preg_replace( '/(\?(.*))/si', '', $uri );
// verwijder een eerste en laaste /
$uri = trim( $uri,'/' );
// splits op / naar een array
$parts = preg_split( "/\//", $uri );



if(!isset ($parts[1])){
    include 'includes/homepage.php';
}
elseif($parts[1] == 'player'){
    //include 'player.php';
}
elseif($parts[1] == 'register'){
    //include 'register.php';
}
elseif($parts[1] == 'login'){
    include 'login.php';
}

?>

<?php
include 'includes/footer.php';
?>