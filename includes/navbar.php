<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            <!--<li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>-->
        </ul>
    </div>
    <?php
    if(!isset($_SESSION['user'])){
        ?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="signup">Signup</a>
            </li>
            <li class="nav-item active">
                <a style='color:inherit;' href="login" ><button class="btn btn-outline-secondary">Login<span class="sr-only">(current)</span></button></a>
                <!--            wat is (current)?-->
            </li>

        </ul> <?php }
    else { ?>
        <!--naam uit de sessie veranderen naar voor- en achternaam!-->
        <p class="nav-item"><a href="account">Welcome <?= $_SESSION['user']['first_name'] . "!";?></a></p>
        <a class="nav-item btn btn-outline-secondary" type="submit" name="submit" href="logout.php">Logout</a>

    <?php } ?>
</nav>