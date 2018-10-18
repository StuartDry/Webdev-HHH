

<link rel="stylesheet" href="css/booking.css">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <h2>Your information</h2>
        </div>

        <!-- Login Form -->
        <form method="POST" action="">
            <input type="text" class="fadeIn second Fname" name="first_name" placeholder="First Name">
            <input type="text" class="fadeIn second Pfix" name="prefix" placeholder="Prefix">
            <input type="text" class="fadeIn second" name="last_name" placeholder="Last Name">
            <input type="text" class="fadeIn second" name="email" placeholder="Enter E-mail">
            <select name="phone1" class="fadeIn third">
                <option>0031</option>
                <option>0000</option>
                <option>1111</option>
            </select>
            <input type="tel" class="fadeIn third" name="phone2" placeholder="Phone number">

            <label for="password" style="font-size: 16px;">Newsletter</label>
            <input type="checkbox" class="fadeIn third" name="newsletter" value="newsletter">
            <button type="submit" name="submit" class="btn btn-primary">Continue</button>
        </form>
    </div>
</div>