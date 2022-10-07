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

    if(isset($_POST['submit']) && isset($_FILES['file']))
    {
        // echo "<pre>";
        // print_r($_FILES['file']);
        // echo "<pre>";
        $file_name=$_FILES['file']['name'];
        $file_size=$_FILES['file']['size'];
        $tmp_size=$_FILES['file']['tmp_name'];
        $error=$_FILES['file']['error'];

        if($error===0){
            if($file_size>1250000)
            {
                $em="file is too large";
                // alert($em);
                header("Location: studentHome.php?error=$em");
            }
            else
            {
                $file_ex=pathinfo($file_name,PATHINFO_EXTENSION);
                $file_ex_lc=strtolower($file_ex);
                $allowed_exs=array("pdf");
                if(in_array($file_ex_lc,$allowed_exs))
                {
                    $new_file_name = uniqid("PDF-",true).'.'.$file_ex_lc;
                    $file_upload_path='studuploadPDF/'.$_SESSION["SessUserID"];
                    if(file_exists($file_upload_path))
                    {
                        $file_upload_path='studuploadPDF/'.$_SESSION["SessUserID"].'/'.$new_file_name;
                        move_uploaded_file($tmp_size,$file_upload_path);
                        $sql="INSERT INTO dataofstud(fileURL,DocType,UserId) VALUES('" . $new_file_name . "','".$_POST['docType']."','".$_SESSION["SessUserID"]."')";
                        $conn->query($sql);
                        // alert('File UPLOADED');
                        header("Location: studentHome.php?error=uploaded");
                        die();
                    }
                    else
                    {
                        mkdir($file_upload_path, 0777, true);
                        $file_upload_path='studuploadPDF/'.$_SESSION["SessUserID"].'/'.$new_file_name;
                        move_uploaded_file($tmp_size,$file_upload_path);
                        $sql="INSERT INTO dataofstud(fileURL,DocType,UserId) VALUES('" . $new_file_name . "','".$_POST['docType']."','".$_SESSION["SessUserID"]."')";
                        $conn->query($sql);
                        // alert('File UPLOADED');
                        header("Location: studentHome.php?error=uploaded");
                        die();
                    }
                    // $file_upload_path='studuploadPDF/'.$new_file_name;
                    // die();
                }
                else
                {
                    $em="unknown error :(";
                    header("Location: studentHome.php?error=$em");
                }
            }

        }
        else{
            $em="unknown error :(";
            // header("Location: studentHome.php?error=$em");
            alert($em);
        }
    }
    else{
        header("Location: studentHome.php");
    }
?>