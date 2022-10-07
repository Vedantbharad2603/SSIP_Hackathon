<?php
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
    $result = $conn->query("SELECT Email FROM users WHERE Email = '" . $_POST["MailId"] ."'");
    if($result->num_rows == 0) {
        $state=$_POST["stuid"];
        switch($state)
        {
            case "Ahmedabad":
                $userID= "GJ01". Strval(rand(1,99999999));
                break;
            case "Mehsana":
                $userID= "GJ02". Strval(rand(1,99999999));
                break;
            case "Surat":
                $userID="GJ05". Strval(rand(1,99999999));
                break;
            case "Rajkot":
                $userID= "GJ03".Strval(rand(1,99999999));
                break;
            case "Bhavnagar":
                $userID= "GJ04".Strval(rand(1,99999999));
                break;
            case "Vadodara":
                $userID= "GJ06".Strval(rand(1,99999999));
                break;
            case "Nadiad":
                $userID= "GJ07".Strval(rand(1,99999999));
                break;
            case "Palanpur":
                $userID= "GJ08".Strval(rand(1,99999999));
                break;
            case "Himmatnagar":
                $userID= "GJ09". Strval(rand(1,99999999));
                break;
            case "Jamnagar":
                $userID= "GJ10". Strval(rand(1,99999999));
                break;
            case "Junagadh":
                $userID= "GJ11". Strval(rand(1,99999999));
                break;
            case "Bhuj":
                $userID= "GJ12". Strval(rand(1,99999999));
                break;
            case "Surendranagar":
                $userID= "GJ13". Strval(rand(1,99999999));
                break;
            case "Amreli":
                $userID= "GJ14". Strval(rand(1,99999999));
                break;
            case "Valsad":
                $userID= "GJ15". Strval(rand(1,99999999));
                break;
            case "Bharuch":
                $userID= "GJ16". Strval(rand(1,99999999));
                break;
            case "Godhra":
                $userID= "GJ17". Strval(rand(1,99999999));
                break;
            case "Gandhinagar":
                $userID= "GJ18". Strval(rand(1,99999999));
                break;
            case "Bardoli":
                $userID= "GJ19". Strval(rand(1,99999999));
                break;
            case "Dahod":
                $userID= "GJ20". Strval(rand(1,99999999));
                break;
            case "Navsari":
                $userID= "GJ21". Strval(rand(1,99999999));
                break;
            case "Rajpipla":
                $userID= "GJ22". Strval(rand(1,99999999));
                break;
            case "Anand":
                $userID= "GJ23". Strval(rand(1,99999999));
                break;
            case "Patan":
                $userID= "GJ24". Strval(rand(1,99999999));
                break;
            case "Porbandar":
                $userID= "GJ25". Strval(rand(1,99999999));
                break;
            case "Vyara":
                $userID= "GJ26". Strval(rand(1,99999999));
                break;
            case "Ahmedabad East":
                $userID= "GJ27". Strval(rand(1,99999999));
                break;
            case "Surat(Pal)":
                $userID= "GJ28". Strval(rand(1,99999999));
                break;
            case "Vadodara(Dargipura)":
                $userID= "GJ29". Strval(rand(1,99999999));
                break;
            case "Ahva-Dang":
                $userID="GJ30". Strval(rand(1,99999999));
                break;
            case "Modasa":
                $userID="GJ31". Strval(rand(1,99999999));
                break;
            case "Veraval(Gir-Somnath)":
                $userID= "GJ32". Strval(rand(1,99999999));
                break;
            case "Botad":
                $userID= "GJ33". Strval(rand(1,99999999));
                break;
            case "Chhota Udepur":
                $userID= "GJ34". Strval(rand(1,99999999));
                break;
            case "Lunawada":
                $userID= "GJ35". Strval(rand(1,99999999));
                break;
            case "Morbi":
                $userID= "GJ36". Strval(rand(1,99999999));
                break;
            case "Khambhaliya":
                $userID= "GJ37". Strval(rand(1,99999999));
                break;
            case "Bavla":
                $userID= "GJ38". Strval(rand(1,99999999));
                break;
        }
        // 
        $sql = "INSERT INTO users (	FirstName, LastName, Email,PhoneNumber,studId)
        VALUES ('" . $_POST["FirstName"] . "','" . $_POST["LastName"] ."','" . $_POST["MailId"] ."','".$_POST["PhoneNo"]."','".$userID."')";
        $conn->query($sql);
        header("Location: thank.php");
        die();
    } else {
        header("Location: login.php");
        die();
    }
    // $mysqli->close();

    
    // if ($conn->query($sql) === TRUE) 
    // {
    // echo "New record created successfully";
    // } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    $conn->close();
?>