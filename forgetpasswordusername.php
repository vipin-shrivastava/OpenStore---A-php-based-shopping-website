<html>

<head>
    <title>
        Forget Password
    </title>

    <link rel="stylesheet" href="css/mystyle.css">
</head>





<body>
    <div class="form-border">
        <div class="heading">
            <label for="login-heading">
                Forget Password
            </label>
        </div>
        <div class="form1">
            <form action="#" method="post">
                <div>

                    <br>
                    <label for="username" class="label-input">
                       Email :
                    </label>
                    <input type="text" class="input-text" id="Useremail"  name="email" placeholder="enter your email...">
                    <br>
                    <br>
                    <button type="submit" class="input-submit" name="submit">
                        Submit
                    </button>
                </div>
                <div class="login-back">
                    <a  href="login.php"  class="btn">Login</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>













<?php

session_start();
include("connection.php");


if ($_REQUEST["Submit"] == "forgetpassform") {

    $email = $_REQUEST['email'];

    $sql = "SELECT id from task3 WHERE email = '$email'";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        foreach ($result as $row) {
            $id = $row['id'];
        }

        $random = rand(1000, 9000);

        $query = "UPDATE task3 SET code = '$random' WHERE id = '$id'";

        $res = mysqli_query($conn, $query);

        $cou = mysqli_affected_rows($conn);

        if ($cou == 1) {
            $_SESSION['id'] = $id;
            $_SESSION['code'] = $random;
            $_SESSION['email'] = $email;
            header("Location: forgetPasswordEmail.php");
        }
    } else {
?>

        <script>
            alert("Email not Matched ! Please Check .");
        </script>
<?php
        // header("Location: forgetpasswordusername.php");
    }
}


?>