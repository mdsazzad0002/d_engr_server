<?php
session_start();
if (!isset($_SESSION['welcome'])) {
    $_SESSION['welcome'] = 'welcome';
    echo '<script>window.location.href="demo"</script>';
} else {
    require_once 'home-1/index.php';
    require_once 'assets/custom/visitor.php';
}

error_reporting(E_ALL); ini_set('display_errors', 1); ?>