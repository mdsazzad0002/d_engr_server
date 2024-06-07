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
D Engr Web