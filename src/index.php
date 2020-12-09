<?php
require_once './core/config.php';


$page = isset($_GET['p']) ? $_GET['p'] : 'main';
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>IB-Patrick Horsch</title>
    <link href="<?=ROOTPATH.'/assets/roboto/font.css'?>" rel="stylesheet">
    <link href="<?=ROOTPATH.'/assets/design/design-index.css'?>" rel="stylesheet">
</head>
<body>
<?
    include VIEWPATH.'site.php';
?>
</body>
</html>


