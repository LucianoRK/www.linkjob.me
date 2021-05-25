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
    <link rel="icon" href="<?= base_url('public/favicon.ico'); ?>" type="image/x-icon" />
    <title>LinkJob</title>

    <!-- Exemplo Exportacao -->
    <script src=""></script>
    <script src="" type="text/javascript"></script>
 
    <script>
        // Globais JS
        const BASEURL = "<?= base_url(); ?>"; // URL do Sistema
        const CONTROLLER = "<?= $base->controllerName(); ?>"; // Recebe o Nome do Controller
        const METODO = "<?= $base->methodName(); ?>"; // Recebe o Método do Controller
        const ROUTE = "<?= $base->routeName(); ?>"; // Recebe a rota atual
    </script>
</head>