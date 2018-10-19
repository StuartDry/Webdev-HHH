<?php
if(isset($_POST['change_info'])){
    $first_name=$_POST['first_name'];
    $prefix=$_POST['prefix'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone1=$_POST['phone1'];
    $phone2=$_POST['phone2'];
    $phonenumber=$phone1.$phone2;
    $newsletter=$_POST['newsletter'];

    $user=new User();
    $result=$user->editUser($first_name, $prefix, $last_name, $email, $phonenumber, $newsletter);
    if(!$result){
        echo "Edit failed.";
    }
}
?>

<div class="container mt-3">
    <h2>Toggleable Tabs</h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item account">
            <a class="nav-link active" data-toggle="tab" href="#home">My personal info</a>
        </li>
        <li class="nav-item account">
            <a class="nav-link" data-toggle="tab" href="#menu1">My bookings</a>
        </li>
        <li class="nav-item account">
            <a class="nav-link" data-toggle="tab" href="#menu2">Change password</a>
        </li>
        <li class="nav-item account">
            <a class="nav-link" data-toggle="tab" href="#menu3">Delete account</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
            <h3>My personal info</h3>
            <form action="" method="post">
                <div>
                    <label>Name
                        <input type="text" name="first_name" placeholder="First name">
                        <input type="text" name="prefix" placeholder="Prefix">
                        <input type="text" name="last_name" placeholder="Surname">
                    </label>
                    <label>E-mail
                        <input type="email" name="email" placeholder="E-mail address">
                    </label>
                    <label>Phonenumber
                        <select name="phone1">
                            <option>0031</option>
                            <option>0000</option>
                            <option>1111</option>
                        </select>
                        <input type="tel" name="phone2" placeholder="Phone number">
                    </label>
                    <label>
                        <input type="checkbox" name="newsletter">
                        Newsletter
                    </label>
                </div>
                <input type="button" class="btn btn-danger account-btns" name="quit" value="Cancel">
                <input type="submit" class="btn btn-success account-btns" name="change_info" value="Save">
            </form>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3>My bookings</h3>
            <div class="booking col-xs-12 col-sm-4">
                <div class="booking-img">
                    <img src="" alt="home">
                </div>
                <p>Naam huisje, naam park</p>
                <p>... personen</p>
                <p>Prijs</p>
                <p>Check-in: 01-01-2001</p>
                <p>Check-out: 02-01-2001</p>
            </div>
            <div class="booking col-xs-12">
                <div class="booking-img">
                    <img src="" alt="home">
                </div>
                <p>Naam huisje, naam park</p>
                <p>... personen</p>
                <p>Prijs</p>
                <p>Check-in: 01-01-2001</p>
                <p>Check-out: 02-01-2001</p>
            </div>
            <div class="booking col-xs-12 col-sm-4">
                <div class="booking-img">
                    <img src="" alt="home">
                </div>
                <p>Naam huisje, naam park</p>
                <p>... personen</p>
                <p>Prijs</p>
                <p>Check-in: 01-01-2001</p>
                <p>Check-out: 02-01-2001</p>
            </div>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Change password</h3>
            <form action="" method="post">
                <div>
                    <input type="password" name="old_pw" placeholder="Current password">
                    <input type="password" name="pass1" placeholder="New password">
                    <input type="password" name="pass2" placeholder="Repeat new password">
                </div>
                <input type="button" class="btn btn-danger account-btns" name="quit" value="Cancel">
                <input type="submit" class="btn btn-success account-btns" name="change_pw" value="Save">
            </form>
        </div>
        <div id="menu3" class="container tab-pane fade"><br>
            <h3>Delete account</h3>
            <form action="" method="post">
                <div>
                    <input type="email" name="delete_account_email" placeholder="Enter e-mailaddress">
                    <input type="password" name="delete_account_pw" placeholder="Enter password">
                </div>
                <input type="button" class="btn btn-danger account-btns" name="quit" value="Cancel">
                <input type="submit" class="btn btn-success account-btns" name="delete_account" value="Save">
            </form>
        </div>
    </div>
</div>