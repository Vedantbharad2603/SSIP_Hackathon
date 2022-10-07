<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style/styleLogin.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
    <body>
        <div class="content">
            <div class="forms">
                <div class="form login">
                    <span class="title">Login</span>
                    <form action="login_db.php" method="post">
                        <div class="input-field">
                            <input class="inputdata" type="text" name="inputOfID" placeholder="Enter user id code" required>
                            <i class="uil uil-dialpad-alt"></i>
                        </div>
                        <button class="input-field button" type="submit" onclick="send()" >SEND OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="js/script.js"></script>
</html>