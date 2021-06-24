<?php
session_start();
require("connection.php");


if ($_SESSION["login_user"] != null) {

    if ($_SESSION['logging'] == 1) {
?>

<html>

<head>
    <title>
        Password Reset
    </title>
    <style>
        .resetpassform {
            padding-left: 460px;
            padding-top: 80px;
            column-gap: 40px;
        }

        #oldpass {
            padding-top: 50px;
        }

        #newpass {
            padding-top: 20px;
        }

        #cnfpass {
            padding-top: 20px;
        }

        #submitbtn {
            padding-top: 20px;
            padding-left: 10px;

        }

        #submit {
            font-size: 16px;
            border-radius: 12px;
            margin: 4px 2px;
            padding: 7px 22px;
        }

        label {
            font-size: 18px;
            font-family: Arial, Helvetica, sans-serif;
            ;
        }
    </style>
     <link rel="stylesheet" href="css/mystyle.css">
     <link rel="stylesheet" href="css/header.css">
</head>

<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="header">
                <a href="#default" class="logo"><?php echo ucfirst($_SESSION["login_user"]); ?></a>
                <div class="header-right">
                    <a class="active" href="panel.php">Home</a>
                    <!-- <a href="passwordReset.php">Password reset</a> -->
                    <a href="logout.php?uname=<?php $_SESSION['login_user'] ?>">logout</a>
                </div>
            </div>

    <div class="form-border">
        <form>
            <div class="column" id="oldpass">
                <label for="old password" class="label-input">Old Password : </label>
                <input name="oldPass" id="oldpassword" class="input-text " placeholder="Old Password.....">
            </div>
            <div class="column" id="newpass">
                <label for="New password" class="label-input">New Password : </label>
                <input name="newPass" id="newpassword" class="input-text " placeholder="New Password.....">
                <span id="message"></span>
            </div>
           
            <div class="column" id="cnfpass" >
                <label for="Confirm password" class="label-input">Confirm Password : </label>
                <input name="cnfPass" id="confirmpassword" class="input-text " placeholder="Confirm Password.....">
                <span id="cnfmessage"></span>
            </div>
            <div class="btn" id="submitbtn">
                <button name="submit" id="submit">Submit</button>
            </div>
        </form>
    </div>

    <script>
        $('#oldpassword, #newpassword').on('keyup', function() {
            if ($('#oldpassword').val() == $('#newpassword').val()) {
                $('#message').html('New password should not match with old one !!!!').css('color', 'red');
            } else
                $('#message').html('').css('color', 'green');
        });
       
    </script>
</body>

</html>








<?php

} else {

    header("location:login.php");
}
} else {

header("location:login.php");
}




?>