<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style/styleLogin.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="content">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>
                    <form action="checkOTP.php" method="post">
                        <div class="input-field">
                            <input type="text" name="otptxt" onkeypress="return onlyNum(event)" placeholder= "Enter OTP" required>
                            <i class="uil uil-dialpad-alt"></i>
                        </div>
                        <br>
                        <div style="clear: both;"></div>
                        <div class="g-recaptcha" data-sitekey="6LdcaWEiAAAAAFX-1WwMTAUdYQoaNt4KsJHpCIw7"></div>
                        <button onclick="callstud()" class="input-field button" type="submit" >Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="js/script.js"></script>
</html>