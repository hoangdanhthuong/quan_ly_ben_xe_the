<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản lý bến xe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/login.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="style/mystyle.css">

</head>
<body>
  <?php include('modules/header.php');?>
  <div class="container-fluid">
   <div class="row">
    <?php 
    include('admin/config.php');
    include('modules/xu_ly/xu_ly_dang_nhap.php');
    ?>
  </div>
</div>
<script type="text/javascript" src="js/myscript.js"></script>
<script type="text/javascript" src="js/xuly.js"></script>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</body>
</html>
