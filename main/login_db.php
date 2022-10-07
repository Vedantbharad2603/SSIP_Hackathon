<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

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
    $s="SELECT UserId,FirstName,LastName,Email FROM users WHERE studId = '" . $_POST["inputOfID"] ."'";
    
    $result = $conn->query($s);
    
    if($result->num_rows != 0)
    {
        $row = $result -> fetch_row();
        $_SESSION["SessUserID"]=$row[0];
        $_SESSION["SessName"]=$row[1]." ".$row[2];
        $_SESSION["SessmailID"]=$row[3];

        // send otp in mail
        $mail = new PHPMailer(true);
        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> Username = "vedantbharad26@gmail.com";
        $mail -> Password = 'lvirkgequjzeuhxc';
        $mail -> SMTPSecure = 'ssl';
        $mail -> Port = 465;

        $mail -> setFrom('vedantbharad26@gmail.com');

        // $mail -> addAddress($row[3]);
        // $mail -> addAddress('vedantbharad@gmail.com');

        $mail -> addAddress($_SESSION["SessmailID"]);
        $mail -> isHTML(true);
        $mail -> isHTML(true);
        $subject="YOUR OTP FOR LOGIN";
        $OTP=rand(1111,9999);
        $_SESSION["SessOTP"]=$OTP;
        $message="YOUR OTP FOR LOGIN IS <".$OTP."> ";

        $mail -> Subject = $subject;
        $mail -> Body = $message;
        $mail -> send();
        //update otp in db
        $updateqry = "UPDATE users SET OTP='" . $OTP . "' WHERE userid=" . $row[0];
        $conn->query($updateqry);

        header("Location: login_Enter.php");
    }
    else{
        header("Location: login.php");
    }
?>