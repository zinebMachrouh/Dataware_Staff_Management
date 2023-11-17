<?php 
    include "PHP/connect.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="shortcut icon" href="./assets/brand.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
</head>
<body class="login-body">
    <div class="login-page">
        <div class="left">
            <img src="./assets/logo.png" alt="logo">
            <h2>Welcome <br> Back!</h2>
        </div>
        <div class="right">
            <h4 class="title">LogIn</h4>
            <p>Welcome back! Please login to your account.</p>
            <form action="" method="post">
                <label for="email">
                    <h4>Email</h4>
                    <input type="email" name="email" id="email" placeholder="example@gmail.com" required >
                </label>
                <label for="password">
                    <h4>Password</h4>
                    <input type="password" name="password" id="password" placeholder="Enter Password" required >
                </label>
                <div class="btns">
                    <button type="reset">Cancel</button>
                    <button type="submit" name="sendF">Submit</button>
                </div>
            </form>
            <p class="sign">Don't Have an account? <a href="#">SignUp</a></p>
        </div>
    </div>
</body>
</html>
<?php
    function Redirect($url, $permanent = false){
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }

    function login() {
        global $connect;

        $email = $_POST['email'];
        $pswd = $_POST['password'];

        $emailP = "/^[a-zA-Z0-9.-_]+@[a-zA-Z]+\.[a-z]{2,}$/";
        $pswdP = "/^[A-Za-z\d]{8,}$/";

        if (preg_match($emailP,$email) && preg_match($pswdP, $pswd)) {
            $user = "SELECT *  FROM users where email = '$email' and password ='$pswd'";
            $result = mysqli_query($connect, $user);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $_SESSION["role"] = $row["role"];
                    $_SESSION["team"] = $row["id_equipe"];
                    Redirect('./PHP/home.php', false);
                }
            }else{
                die('Database query failed: ' . mysqli_error($connect));
            }
        }else{
            Redirect('index.php', false);
        }
    }
    if (isset($_POST['sendF'])) {
        login();
    }

?>