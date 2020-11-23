<?php
session_start();

$userinfo = array(
    'admin' => '123456'
);

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
}

if (isset($_POST['username'])) {
    if ($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
        header('Location:  homepage.php');
        die();
    } else {
        $noti = '<h6>Tài khoản hoặc mật khẩu không chính xác!</h6>';
    }
}  else $noti = "";

?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link href="./assets/css/index.css" rel="stylesheet">
    <!-- End Bootstrap CSS -->

</head>

<body>
    <div class="all">
        <!-- Logo Top Page -->
        <div class="logoHeader">
            <p class="logoHeader__1">DALARYIZMI</p>
            <p class="logoHeader__2">WEBSITE</p>
        </div>
        <!-- End Logo -->
        <!-- Body Page -->
        <div class="bodyPage">
            <!-- Funny Slogan -->
            <div class="quote">
                <pre id="typewriter">
                    <span class="upperText">Sự vi diệu của code là:</span>
                        <span class="subText">hôm qua chạy tốt,
                            hôm nay không được,
                              nhưng ngày mai lại chạy bình thường...</span>
                </pre>
            </div>
            <!-- End Slogan -->

            <!-- Login Form -->
            <div class="login-form">
                <form action="" method="post">
                    <h2 class="title">Welcome</h2>
                    <img
                        src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/82b8d8efd3b0ac6382b9d0d71a99c6cf9dcefa23/img/avatar.svg">
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" name="username" class="input" require>
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="password" name="password" class="input" require>
                        </div>
                    </div>
                    <div class="directAccount">
                        <div>
                            <input type="checkbox" checked="checked" name="remember">Remember me
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="">
                        <input type="submit" class="btnSubmit" value="Login">
                    </div>
                </form>
            </div>
            <!-- End Login Form -->
        </div>
        <div class="footerPage">
            <div class="part1">
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-skype"></i>
            </div>
            <div class="part2">
                <p>Handcrafted by me</p>
                <i class="far fa-copyright"></i>
                <p>Dalaryimi</p>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="./assets/js/index.js"></script>
</body>

</html>