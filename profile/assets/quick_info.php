<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<!-- Favicons -->
<link href="<?= APP_URL;?>assets/img/<?=mysqli_fetch_assoc($con->query("SELECT * FROM `logo` WHERE `type`='fav'"))['file'] ?? 'loading.png';?>" rel="icon">

<!-- VENDOR CSS ICON -->
<link href="<?= APP_URL;?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= APP_URL;?>assets/vendor/boxicons/css/boxicons.css">

<!-- Custom fonts for this template-->
<link href="<?= APP_URL;?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template-->
<link href="<?= APP_URL;?>assets/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" href="/profile/assets/style.css">