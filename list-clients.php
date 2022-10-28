<?php 
    require dirname(__FILE__).'/config.php';
    require dirname(__FILE__).'/model/DatabaseActions.php';
    $lista_de_clientes = DatabaseActions::ListClients();
  
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
    <h1>Quantidade</h1>
    <form action="" method="get">
    <select name="" id="">
        <option value="" selected>10</option>
        <option value="">15</option>
        <option value="">20</option>
    </select>
    </form>
   
    <?php foreach ($lista_de_clientes as $row) {
        var_dump($row);
        echo "<br>";
        echo "<br>";
    } ?>

    <button>atualizar lista</button>
</body>
</html>