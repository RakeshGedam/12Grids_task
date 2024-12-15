<?php
    $emailErr = "";
    $passErr = "";

    if(isset($_POST['login'])){
        $email = $_POST['eMail'];
        $pass = $_POST['pass'];

        if(empty($email)){
            $emailErr = "<br>*Email id is required";
        }

        else if(empty($pass)){
            $passErr = "<br>*Password is required";
        }
        else if(strlen($pass)<4){
            $passErr = "<br>*Password is too short";
        }
        if (empty($emailErr) && empty($passErr)) { 
            echo "<div id='success-message' style='background-color:green'; height:250px;><center>Successfully Logged in!</center></div>";
            echo "<script>
                    setTimeout(function() { 
                        var successMsg = document.getElementById('success-message'); 
                        if (successMsg) { 
                            successMsg.style.display = 'none'; 
                        } 
                    }, 5000); // disappear automatically after 5 seconds
                  </script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- BootStrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- GFonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Itim&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- reCAPTCHA  -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="lForm">
                    <h3 style="display: inline; border-bottom: 3px solid black;">Login Here!</h3>
                    <form action="" method="post">
                        
                    <div class="pt-5 pr_c">
                            <label>Enter your Email </label>
                            <input type="email"  name="eMail" placeholder="example@xyz.com" id="">
                            <span style="color:red;"><?php echo $emailErr; ?></span>
                        </div>

                        <div class="pt-5">
                            <label >Enter your password</label>
                            <input name="pass" class="pr-3" type="password" placeholder="Password" id="">
                            <span style="color:red;"><?php echo $passErr ?></span>
                        </div>
                        <div class="pt-4">
                            <div id="g-captcha" required class="g-recaptcha"
                                data-sitekey="6LdpSJwqAAAAAA_izSxogyFJ8JicW1FD1Me2bx2q"></div>
                        </div>
                        <div class="pt-3">
                            <input type="submit" name="login" value="Login">
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
    </svg>
    
</body>

</html>