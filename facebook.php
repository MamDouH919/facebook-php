<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Facebook</title>
        <!-- css files -->
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<!-- Header -->
        <div class="head-page">
                <h1 class="title">facebook</h1>
        </div>
<!-- body -->
<div class="cont">
    <div class="hbody">
            <h2 class="tit">facebook</h2>
            <p class="hbody_des">Facebook gives you the ability to communicate with
            people and share what you want with them</p>
    </div>
    <div class="loginbox">
        <div>
            <form name="myForm"  onsubmit="return validateEmail()" 
            onsubmit="return validatePass()" method="post" >
                <input type="text" class="username"  autofocus="1" name="email" id="username"
                placeholder="Email address or phone number" >
                <div class="err1" id="err1">
                    <p id="email-err">The email address or mobile number you entered isn't connected to an account.
                    <a id="Find-acc" href="#">Find your account and log in.</a></p>
                </div>
                <input type="password" class="pass" placeholder="Password" name="pass">
                <div class="err1" id="err2">
                    <p id="email-err">The password that you've entered is incorrect.
                    <a id="Find-acc" href="#"> Forgotten password?</a></p>
                </div>
                <button class="login" type="submit" >log in</button>
            </form>
        </div>
        <a href="#" class="fpass">Forgotten password?</a>
        <hr>
        <div>
            <form action="create-ac.php">
                <button class="Cr-acc" >creat new account</button>
            </form>
        </div>
        
    </div>
    <!-- <p class="cp"><a href="#" class="cpage">Create a Page</a> for a celebrity, band or business.</p> -->
</div>
<div>
    <footer class="end">
        <div class="lang">
        <a href="#">English (UK)</a>
        <a href="#">العربيه</a>
        <a href="#">Français (France)</a>
        <a href="#">Italiano</a>
        <a href="#">Deutsch</a>
        <a href="#">Русский</a>
        <a href="#">Español</a>
        <a href="#">Bahasa Indonesia</a>
        <a href="#">Türkçe</a>
        <a href="#">Português (Brasil)</a>
        <a href="#">हिन्दी</a>
        <hr>
        </div>
        <div class="src">
        <a href="#">Sign Up</a>
        <a href="#">Log In</a>
        <a href="#">Messenger</a>
        <a href="#">Facebook Lite</a>
        <a href="#">Watch</a>
        <a href="#">Places</a>
        <a href="#">Games</a>
        <a href="#">Marketplace</a>
        <a href="#">Facebook Pay</a>
        <a href="#">Jobs</a>
        <a href="#">Oculus</a>
        <a href="#">Portal</a>
        <a href="#">Instagram</a>
        <a href="#">Local</a>
        <a href="#">Fundraisers</a>
        <a href="#">Services</a>
        <a href="#">Voting Information Centre</a>
        <a href="#">About</a>
        <a href="#">Create ad</a>
        <a href="#">Create Page</a>
        <a href="#">Developers</a>
        <a href="#">Careers</a>
        <a href="#">Privacy</a>
        <a href="#">Cookies</a>
        <a href="#">AdChoices</a>
        <a href="#">Terms</a>
        <a href="#">Help</a>
        </div>
        <div class="cpy">
        <p>Facebook © 2021</p>
        </div>
    </footer>
</div>
<script src="js/javas.js"></script>
</body>
</html>