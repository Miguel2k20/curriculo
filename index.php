<!DOCTYPE html>
<html lang="pt">

<?php
error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['page'] == null) {
    $url = "home.php";
} else {
    $url = $_GET['page'] . ".php";
} ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Miguel Curriculo</title>
    <link rel="icon" type="image/png" href="imagens/favicon.png" />
    <link rel="stylesheet" type="text/css" href="estilos/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="estilos/font/roboto/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="estilos/font/oleoskcript/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="estilos/css/padroes.css" />
    <link rel="stylesheet" type="text/css" href="estilos/css/site.css" />

</head>
<script src="https://kit.fontawesome.com/b6698fea4f.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<body>
    <?php
        include("header.php");
        include("pages/" . $url);
        include("footer.php");
    ?>

</body>

<script type="text/javascript">
    $(document).ready(function() {

    });
</script>

</html>