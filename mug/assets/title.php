<?php
if (!defined('main')) {
   echo "<script>window.location.href='../'</script>";
   exit();
};
?>
<?php
$dir_explode = explode("/", $_SERVER['PHP_SELF']);
echo $active = ucfirst($dir_explode[count($dir_explode) - 2]);

?> &nbsp; ~ &nbsp;
<?php echo $s_title = mysqli_fetch_assoc($con->query("SELECT * FROM `web_title` WHERE `type`='title'"))['title'] ?? "D Engr Web";?>