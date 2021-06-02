<!doctype html>
<html lang="pt-br">

<?php
$version     = env('sistemaNome');
$fetchClass  = $base->controllerName();
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= base_url('public/js/template/img/logo-light.png'); ?>" type="image/x-icon" />
    <title>LinkJob</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/public/js/toastr/toastr.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/js/bootstrap-3.4.1-dist/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>/public/js/template/css/plugins.css" media="all" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/public/js/template/css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600%7CMontserrat:400,500,600,700,800" media="all" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>/public/js/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/js/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/js/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <script src="<?= base_url(); ?>/public/js/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/jquery-mask/jquery.mask.min.js"></script>
    <script src="<?= base_url(); ?>/public/js/jquery.maskMoney.min.js"></script>

    <script>
        // Globais JS
        const BASEURL = "<?= base_url(); ?>"; // URL do Sistema
        const CONTROLLER = "<?= $base->controllerName(); ?>"; // Recebe o Nome do Controller
        const METODO = "<?= $base->methodName(); ?>"; // Recebe o Método do Controller
        const ROUTE = "<?= $base->routeName(); ?>"; // Recebe a rota atual
    </script>
</head>