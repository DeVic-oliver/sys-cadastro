<?php include_once dirname(__DIR__) . '\config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once dirname(__DIR__) . '/templates/headers/header.php'; ?>
    <?php include_once dirname(__DIR__) . '/templates/containers/main/main-system-open.html'; ?>
    <div class="system-page-container">
        <h1>Olá</h1>
        <p>Você está na área interna do sistema! <br><br> Veja os outros integrantes do sistema!</p>
        <h2>LISTAGEM</h2>
    </div>
    <?php include_once dirname(__DIR__) . '/templates/containers/main/main-system-close.html'; ?>

</body>
</html>