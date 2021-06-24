<?php
session_start();


?>

<html>

<head>
    <title>
        Forget Password
    </title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div class="form-border">
        <div class="heading">
            <h3>Forget Password</h3>
        </div>
        <form method="POST" action="changepassword.php">
            <div class="input-forgetpass">
                <label for="forgetPass1" class="label-input"><b>New Password &nbsp;&nbsp;&nbsp; : </b> </label>
                <input name="password" class="input-text" id="password" type="password" placeholder="Enter new Pass...">
            </div>
            <br>
            <div class="input-forgetpass" >
                <label for="cnfforgetPass1" class="label-input"><b>Confirm Password : </b></label>
                <input type="password" class="input-text" name="confirm_password" id="confirm_password" placeholder="Enter your confirm Pass...">
                <span id='message'></span>
            </div>
            <br>
            <div class="forgetpassbtnfield">
                <button class="input-submit" name="Submit" value="forgetpassform">Submit</button>
            </div>
        </form>
    </div>

    <script>
        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message').html('Matched').css('color', 'green');
            } else
                $('#message').html('Not Matching').css('color', 'red');
        });


       
    </script>


    
</body>

</html>