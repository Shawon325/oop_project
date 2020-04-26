<?php
include '../Session/Session.php';
Session::checkSession();
include_once '../Database/Database.php';
include_once '../Database/connect.php';
spl_autoload_register(function($class) {
    include 'layouts/class/'.$class.'.php';
});
if (isset($_GET['action'])) {
  Session::destroy();
}
?>

<!-- Header -->
<?php include 'layouts/app_css.php'; ?>
<!-- Sidebar -->
<?php include 'layouts/app_sidebar.php'; ?>
<!-- Dashboard -->
<?php
if(isset($_REQUEST['page'])) {
    switch ($_REQUEST['page']) {
        case 'dashboard':
            include 'layouts/app_dashboard.php';
            break;
        
        default:
            include 'layouts/app_dashboard.php';
            break;
    }
} else {
    include 'layouts/app_dashboard.php';
}
?>
<!-- Footer -->
<?php include 'layouts/app_js.php'; ?>