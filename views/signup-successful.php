<?php 

    $person_first_name = $_POST['person-first-name'];
    $person_last_name = $_POST['person-last-name'];
    $person_age = $_POST['person-age'];
    $person_gender = $_POST['person-gender'];
    $person_email = $_POST['person-email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include_once ROOT . '/templates/headers/header-logout.php'; ?>
<?php include_once ROOT . '/templates/containers/main/main-system-open.html'; ?>
    
    <div class="form-request-result">
        <h1>Olá, <?php echo $person_first_name; ?> seu cadastro foi realizado com sucesso!</h1>
    </div>

<?php include_once ROOT . '/templates/containers/main/main-system-close.html'; ?>

</body>
</html>