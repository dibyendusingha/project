<!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <!-- CSS only -->
        <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
<!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Tapestry&display=swap" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="text.css"> -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div class="mainForm" >
            <h2 >Registation Form</h2>
            <form action="view.php" name="contactForm" onsubmit="return validateForm()" method="post">
                <div class="field_wrap">
                    <label>Username:</label>
                    <input type="text" name="fname" placeholder="Enter Username">
                    <div id="username_txt">
                    </div>
                </div>
                <div class="field_wrap">
                    <label>Email ID:</label>
                    <input type="email" name="femail" placeholder="Enter Email ID">
                        <div id="email_txt">
                        </div>
                </div>
                <div class="field_wrap">
                    <label>Password:</label>
                    <input type="password" name="fpassword" placeholder="Enter Password">
                    <label>Re-enter Password:</label>
                    <input type="password" name="rePassword" placeholder="Enter Re-password">
                        <div id="password_txt">
                        </div>
                </div>
                <input type="submit" name="submit" value="REGISTRATION" class="submit">
                <div align="center"><a href="../login/login.php"><?php echo "already registration to "; ?>click here</a></div>

            </form>

        </div>



        <script src="js/jquery-3.5.1.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>
    </body>
</html>