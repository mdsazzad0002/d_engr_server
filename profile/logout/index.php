<?php
if (file_exists('../assets/custom/session.php')) {
    require_once '../assets/custom/session.php';
}
if (isset($_COOKIE['user'])) {
    setcookie('user', '', time() - (86400 * 30), "/"); // 86400 = 1 day
}

echo "<script>window.location.href='../'</script>";
