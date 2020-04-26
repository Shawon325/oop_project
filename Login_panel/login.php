<?php
include '../Session/Session.php';
Session::checkLogin();
include_once '../Database/Database.php';
include_once '../Database/connect.php';
spl_autoload_register(function($class) {
    include '../Admin_panel/layouts/class/'.$class.'.php';
});
$login = new Login;
if($_SERVER['REQUEST_METHOD']=='POST'&&isset($_POST['submit']))
{
  $login->login($_POST);
}
?>

<!doctype html>
 <html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="../Admin_panel/assets/css/normalize.css">
    <link rel="stylesheet" href="../Admin_panel/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Admin_panel/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Admin_panel/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../Admin_panel/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../Admin_panel/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../Admin_panel/assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" name="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../Admin_panel/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../Admin_panel/assets/js/popper.min.js"></script>
    <script src="../Admin_panel/assets/js/plugins.js"></script>
    <script src="../Admin_panel/assets/js/main.js"></script>


</body>
</html>
