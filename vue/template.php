<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <!--<link rel="stylesheet" href="assets/css/bootstrap.css">-->
    <link rel="stylesheet" href="assets/css/menu.css" type="text/css">


    <title></title>
</head>
<body>
<header>
    <?php
    require_once "menu.php";
    ?>
</header>
<div class="container">
    <?= $content ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>