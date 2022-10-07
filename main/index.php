<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "edusystem";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    else
    {
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home page</title>
        <link rel="stylesheet" href="style/home.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="js/home.js"></script>
    </head>
    <body>
        <a name="home"></a>
        <div class="indexcss">
            <!-- <a class="gotop" href="#home"><i class="uil uil-arrow-up"></i></a> -->
            <div style="width: 90%;" class="navbar">
            <img style="width: 15%;" src="img/azadiLogo.png" alt="Azadi Logo">
            <img src="img/mainLogo.png" alt="Main Logo">
            <ul>
                <li><a style="color: #f5cd79; " class="activeBT" href="index.php">Education</a></li>
                <li><a href="healthindex.php">Health</a></li>
                <li><a href="employmentindex.php">Employment</a></li>
            </ul>
            <button type="button" class="logIn" onclick="callLogin()"> <span></span>Log In</button>
            <div style="clear: both;"></div>
            <div class="content">
                <div class="row">
                    <div style="height:10px;" class="col-sm-6">
                        <img style="width: 57%; border-radius: 30px;" src="img/aboutedu.jpg" alt="Azadi Logo">
                    </div>
                    <div class="col-sm-6">
                        <h3>SHOW YOUR EDUCATION JOURNEY</h3>
                        <P>Education – Your Door To The Future.</P>
                        <P>The roots of education are bitter but the fruits is sweet</P>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>