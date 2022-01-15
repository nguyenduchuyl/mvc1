<?php require_once 'libs/phpti/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="author" content="" />
<title>
    <?php startblock('title') ?>
    <?php endblock() ?>
</title>
<meta name="csrf-token"/>

<!-- Google Fonts -->
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="/assets/admin/css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<![endif]-->

<?php include 'views/admin/layoutadmin/css.php' ?>

<?php startblock('css') ?>
<?php endblock() ?>
<body class="sb-nav-fixed">


<?php include 'views/admin/layoutadmin/headerad.php' ?>

<div class="row" style="margin-top: 100px;">
    <?php startblock('content') ?>
    <?php endblock() ?>
</div>

<?php include 'views/admin/layoutadmin/footerad.php' ?>


<!-- jQuery sticky menu -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/assets/admin/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="/assets/admin/js/datatables-simple-demo.js"></script>

<?php include 'views/admin/layoutadmin/script.php' ?>

<?php startblock('script') ?>
<?php endblock() ?>
</body>
</html>
