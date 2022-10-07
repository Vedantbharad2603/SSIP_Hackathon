<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';
    require 'phpmailer/src/SMTP.php';

    if(isset($_POST["send"])) {
        $mail = new PHPMailer(true);

        $mail -> isSMTP();
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> Username = "vedantbharad26@gmail.com";
        $mail -> Password = 'lvirkgequjzeuhxc';
        $mail -> SMTPSecure = 'ssl';
        $mail -> Port = 465;

        $mail -> setFrom('vedantbharad26@gmail.com');

        $mail -> addAddress($_POST['email']);
        // $mail -> addAddress('vedantbharad@gmail.com');

        $mail -> isHTML(true);
        $mail -> isHTML(true);
        $subject="YOUR OTP FOR LOGIN";
        $OTP=rand(1111,9999);
        $message="YOUR OTP FOR LOGIN IS <".$OTP."> ";

        $mail -> Subject = $subject;
        $mail -> Body = $message;

        $mail -> send();

        echo 
        "
            <script>
                alert('send successfully');
                document.location.href = 'getformail.php';
            </script>
        ";
    }
?>
