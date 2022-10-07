<?php
// session_start();
?>
    <?php 
    if(isset(($_SESSION["SessName"])))
    {
        if(strlen($_SESSION["SessName"])!=0)
        {
        ?>
            <div style="width: 100%; float:left;" class="navbar">
                <img src="img/mainLogo.png" alt="Main Logo">
                <ul>
                    <li><a href="educationindex.php">Education</a></li>
                    <li><a href="healthindex.php">Health</a></li>
                    <li><a href="employmentindex.php">Employment</a></li>
                    <li><a href="#">
                        <h6 style="float: left;color: #fff; padding-top: 15px;" id="user_name"> <?php echo($_SESSION["SessName"]) ?></h6>
                        <img style="width:30%;float:right; padding-top: 10px;" src="img/user.png" alt=""></a>
                        <div class="sub-menu">
                            <ul>
                                <li><i class="fa-solid fa-right-from-bracket"></i><a href="#">notification</a></li>
                                <li><i class="fa-solid fa-bell"></i><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        <?php
        }
    }
    else{
        ?>
        <div style="width: 90%;" class="navbar">
            <img src="img/mainLogo.png" alt="Main Logo">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#health">Health</a></li>
                <li><a href="#employment">Employment</a></li>
            </ul>
            <button type="button" class="logIn" onclick="callLogin()"> <span></span>Log In</button>
        </div>
        <?php
    }
    ?>