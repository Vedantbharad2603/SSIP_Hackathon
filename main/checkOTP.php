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
    if(isset($_POST['g-recaptcha-response']))
    {
        $secreatkey="6LdcaWEiAAAAAECoQtAcbHDTr5M20idg-ZHlFSna";
        $ip=$_SERVER['REMOTE_ADDR'];
        $response=$_POST['g-recaptcha-response'];
        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secreatkey&response=$response&remoteip=$ip";
        $fire=file_get_contents($url);
        $data=json_decode($fire);
        if($data->success==true) {

            if($_POST['otptxt']==$_SESSION["SessOTP"])
            {
                $updateqry = "UPDATE users SET OTP='" . 23 . "' WHERE userid=" . $row[0];
                $conn->query($updateqry);
                header("Location: studentHome.php");
                die();
            }
            else{
                echo 
                "
                    <script>
                        alert('wrong OTP');
                        document.location.href = 'login_Enter.php';
                    </script>
                ";
                die();
            }
        }
        else{
            echo 
            "
                <script>
                    alert('fill recaptcha');
                    document.location.href = 'login_Enter.php';
                </script>
            ";
            die();
        }
    }
    else{
        echo 
        "
            <script>
                alert('recaptcha error');
                document.location.href = 'login_Enter.php';
            </script>
        ";
        die();
    }
    
    
?>