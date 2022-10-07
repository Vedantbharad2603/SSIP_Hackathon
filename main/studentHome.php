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
        <title>Education</title>
        <link rel="stylesheet" href="style/home.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel = "stylesheet" href ="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <script src="js/home.js"></script>
    </head>
    <body>
        <a name="home"></a>
        <div class="banner">
            <!-- bot -->
            <!-- <a class="botBT" onclick="javascript:openForm()" href="#"><i class="uil uil-comment-dots"></i></a>

            <div class="container" id="bot">
                <div class="chat-header">
                    <div class="logo">
                        <img  class="logo_img" src="img/chat-bot-removebg-preview.png" alt="chatbot" >
                    </div>
                    <div class="title">Help Assistant</div>
                    <div class="close">
                        <img onclick="javascript:closeForm()" style="width: 100%; padding-left: 40px; padding-top: 10px;" src="img/cross (5).png" alt="close" >
                    </div>
                </div>
                <div class="chat-body"></div>
                <div class="chat-input">
                    <div class="input-sec">
                        <input type="text" id="txtInput" placeholder="Type here" autofocus >
                    </div>
                    <div class="send">
                        <img src="img/send.svg" alt="send">
                    </div>
                </div>
            </div> -->

            <?php include 'include/hader.php'; ?>
            <div style="clear: both;"></div>
            <div style="text-align: center;padding-left: 250px;padding-right: 250px;" class="conforstud">
                <div class="educalss">
                    <button onclick="javascript:show1()" style="margin-right: 20px;" class="btnstd" type="button">primary education</button>
                    <button onclick="javascript:show2()" style="margin-right: 20px;" class="btnstd" type="button">secondary education</button>
                    <button onclick="javascript:show3()" style="margin-right: 20px;" class="btnstd" type="button">primary education</button>
                </div>
                <div style="clear: both;"></div>
                <div class="primary" id="show1">

                <?php
                    $s="SELECT * from dataofstud where userid = " . $_SESSION["SessUserID"];
                    
        
                    $result = $conn->query($s);
                    if($result->num_rows != 0)
                    {
                        $rows = $result -> fetch_all(MYSQLI_ASSOC);
                        foreach($rows as $key => $value)
                        {
                            // print_r($result);
                ?>
                    <div class="row">
                        <div class="cal-sm-6">
                            <h3 id=doctype><?php echo($value["DocType"]);?></h3>
                        </div>
                        <div class="cal-sm-6">
                            <a target="_blank" href="<?php echo('studuploadPDF/'.$value['UserId'].'/'.$value['fileURL']);?>">Click here</a> to view
                        </div>
                    </div>
                    <?php
                        }
                    }
                    
                    ?>

                </div>
                <div class="secondary" id="show2" style="display: none;">
                    <button class="btnstd" type="button">9</button>
                    <button class="btnstd" type="button">10</button>
                </div>
                <div class="highSecondary" id="show3" style="display: none;">
                    <button class="btnstd" type="button">11</button>
                    <button class="btnstd" type="button">12</button>
                </div>
                <div class="col-sm-6 educontent">
                    <h1>SHOW YOUR EDUCATION JOURNEY</h1>
                    <P>Your Achivements, Accomplishments!!!</P>
                    <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return checkme();">
                        <div class="input-field" >
                            <label>Choose city:</label>
                            <select name="docType" id="docType" require>
                                <option value="">Select one</option>
                                <option value="aadhar">Aadhar</option>
                                <option value="pan">Pan</option>
                            </select>
                        </div>
                        <input type="file" name="file">
                        <button type="submit" name="submit">UPLOAD</button>
                        <?php

                        if(isset($_GET["error"]))
                        {
                            ?>
                            <span style="color: red;"><?php echo($_GET["error"]) ?></span>
                            <?php
                        }

                        ?>
                    </form>
                </div>
            </div>
            <!-- <div class="about row">
                <div class="col-sm-6">
                    <img class="eduimg" src="img/slid1.png" alt="">
                </div>
                <div class="col-sm-6 educontent">
                    <h1>SHOW YOUR EDUCATION JOURNEY</h1>
                    <P>Your Achivements, Accomplishments!!!</P>
                    <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return checkme();">
                        <div class="input-field" >
                            <label>Choose city:</label>
                            <select name="docType" id="docType" require>
                                <option value="">Select one</option>
                                <option value="aadhar">Aadhar</option>
                                <option value="pan">Pan</option>
                            </select>
                        </div>
                        <input type="file" name="file">
                        <button type="submit" name="submit">UPLOAD</button>
                        <?php

                        if(isset($_GET["error"]))
                        {
                            ?>
                            <span style="color: red;"><?php echo($_GET["error"]) ?></span>
                            <?php
                        }

                        ?>
                    </form>
                </div> -->
            </div>

            <!-- <div class="edu">
                <div class="about row">
                    <div class="col-sm-6">
                        <img class="eduimg" src="img/slid1.png" alt="">
                    </div>
                    <div class="col-sm-6 educontent">
                        <h1>SHOW YOUR EDUCATION JOURNEY</h1>
                        <P>Your Achivements, Accomplishments!!!</P>
                        <form action="upload.php" method="post" enctype="multipart/form-data" onsubmit="javascript:return checkme();">
                            <div class="input-field" >
                                <label>Choose city:</label>
                                <select name="docType" id="docType" require>
                                    <option value="">Select one</option>
                                    <option value="aadhar">Aadhar</option>
                                    <option value="pan">Pan</option>
                                </select>
                            </div>
                            <input type="file" name="file">
                            <button type="submit" name="submit">UPLOAD</button>
                            <?php

                            if(isset($_GET["error"]))
                            {
                                ?>
                                <span style="color: red;"><?php echo($_GET["error"]) ?></span>
                                <?php
                            }

                            ?>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </body>
    <script>
        function show1() {
            document.getElementById("show1").style.display = "block";
            document.getElementById("show2").style.display = "none";
            document.getElementById("show3").style.display = "none";
        }
        function show2() {
            document.getElementById("show2").style.display = "block";
            document.getElementById("show1").style.display = "none";
            document.getElementById("show3").style.display = "none";
        }
        function show3() {
            document.getElementById("show3").style.display = "block";
            document.getElementById("show1").style.display = "none";
            document.getElementById("show2").style.display = "none";
        }
    </script>
</html>