<nav class="navbar navbar-expand-sm bg-primary text-white fixed-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="#">
            <img src="./images/icons/HHH.png" alt="Logo" style="width:70px;">
        </a>
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./search">Search</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./cart">Cart</a>
                </li>

 


                <form class="form-inline" action="#">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search ">
                    <button class="btn btn-success" type="submit"><i class="fa fa-search"></i> Search</button>
                </form>

            </ul>
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
        </div>
    </div>
</nav>