<?php
session_start();
session_unset();

?>


<!DOCTYPE html>
<html>

<head>
    <title>
        Login Page
    </title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>

<body>
    <div class="form-border">
        <div class="heading">
            <label for="login-heading">
                User Login
            </label>
        </div>
        <div class="form1">
            <form action="loginCheck.php" method="POST">
                <div>

                    <br>
                    <label for="username" class="label-input">
                        Username :
                    </label>
                    <input type="text" class="input-text" name="username" placeholder="Enter your username">
                    <br>
                    <br>
                    <label for="password" class="label-input">
                        Password :
                    </label>
                    <input type="password" class="input-text" name="password" placeholder="Enter your password">
                    <br>
                    <br>
                    <button type="submit" class="input-submit" name="submit">
                        Submit
                    </button>
                </div>
                <div class="forget-link">

                    <a href="forgetpasswordusername.php" style="color:black" class="btn">Forgot password?</a>
                </div>
            </form>
        </div>
    </div>
</body>



</html>