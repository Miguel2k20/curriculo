<!DOCTYPE html>
<html lang="pt">

<?php
error_reporting(E_ALL ^ E_NOTICE);
if ($_GET['page'] == null) {
    $url = "home.php";
}
if (!is_file("pages/" . $_GET['page'] . ".php")) {
    $url = "404.php";
} else {
    $url = $_GET['page'] . ".php";
} ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>João Miguel Curriculo</title>
    <link rel="stylesheet" type="text/css" href="estilos/font/roboto/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="estilos/css/padroes.css" />
    <link rel="stylesheet" type="text/css" href="estilos/css/site.css" />
</head>

<body>
    <?php
    include("header.php");
    include("pages/" . $url);
    include("footer.php");
    ?>
</body>

</html>