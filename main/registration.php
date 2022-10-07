<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <link rel="stylesheet" href="style/styleLogin.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
            function validateMyform()
            {
                alert('here');
                return false;
            }
        </script>
    </head>
    <body>
        <div class="content">
            <div class="forms">
                <div class="form login">
                    <span class="title">Registration</span>

                    <form action="reg_db.php" method="post">
                        <div class="input-field">
                            <input name="FirstName" class="inputdata" type="text" placeholder="Enter First Name" required>
                            <i class="uil uil-keyboard"></i>
                        </div>
                        <div class="input-field">
                            <input class="inputdata" name="LastName" type="text" placeholder="Enter Last Name" required>
                            <i class="uil uil-keyboard"></i>
                        </div>
                        <div class="input-field">
                            <input class="inputdata" name="PhoneNo" onkeypress="return onlyNum(event)" type="text" placeholder="Phone number" required>
                            <i class="uil uil-dialpad"></i>
                        </div>
                        <div class="input-field">
                            <label>Choose city:</label>
                            <select name="stuid">
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Mehsana">Mehsana</option>
                                <option value="Surat">Surat</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Bhavnagar">Bhavnagar</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Nadiad">Nadiad</option>
                                <option value="Palanpur">Palanpur</option>
                                <option value="Himmatnagar">Himmatnagar</option>
                                <option value="Jamnagar">Jamnagar</option>
                                <option value="Junagadh">Junagadh</option>
                                <option value="Bhuj">Bhuj</option>
                                <option value="Surendranagar">Surendranagar</option>
                                <option value="Amreli">Amreli</option>
                                <option value="Valsad">Valsad</option>
                                <option value="Bharuch">Bharuch</option>
                                <option value="Godhra">Godhra</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                                <option value="Bardoli">Bardoli</option>
                                <option value="Dahod">Dahod</option>
                                <option value="Navsari">Navsari</option>
                                <option value="Rajpipla">Rajpipla</option>
                                <option value="Anand">Anand</option>
                                <option value="Patan">Patan</option>
                                <option value="Porbandar">Porbandar</option>
                                <option value="Vyara">Vyara</option>
                                <option value="Ahmedabad East">Ahmedabad East</option>
                                <option value="Surat(Pal)">Surat(Pal)</option>
                                <option value="Vadodara(Dargipura)">Vadodara(Dargipura)</option>
                                <option value="Ahva-Dang">Ahva-Dang</option>
                                <option value="Modasa">Modasa</option>
                                <option value="Veraval(Gir-Somnath)">Veraval(Gir-Somnath)</option>
                                <option value="Botad">Botad</option>
                                <option value="Chhota Udepur">Chhota Udepur</option>
                                <option value="Lunawada">Lunawada</option>
                                <option value="Morbi">Morbi</option>
                                <option value="Khambhaliya">Khambhaliya</option>
                                <option value="Bavla">Bavla</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <input type="email" name="MailId" placeholder= "Enter Mail" required>
                            <i class="uil uil-envelope"></i>
                        </div>
                        <div style="clear: both;"></div>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LdcaWEiAAAAAFX-1WwMTAUdYQoaNt4KsJHpCIw7"></div>
                        <button class="input-field button" type="submit" >Register</button>
                        <div class="checkbox-txt" style="text-align: center">
                            <!-- <a href="#" class="text">Alrady have account?</a> -->
                            <b class="text">Alrady have account?</b>
                            <a href="login.php" class="temp">Login now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
    <script src="js/script.js"></script>
</html>