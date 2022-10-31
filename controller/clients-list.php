<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de clientes</title>
    </head>
    <body>
        <header class="system-header">
            <div class="system-menu-container">
                <nav class="logout-menu">
                    <a href="<?php echo ROOT; ?>/index.php" class="sign-in-item">Entrar</a>
                    <a href="<?php echo ROOT; ?>/signup.php" class="sign-up-item">Cadastro</a>
                    <a href="<?php echo ROOT; ?>/list-clients.php" class="sign-up-item">Listagem</a>
                </nav>
            </div>
        </header>
        <main class="system-main">
            <div class="centralizer">

        
        <?php
        require dirname(__DIR__).'/model/databaseactions.php';
        require dirname(__DIR__).'/config.php';
        
        $table_clients_rows = DatabaseActions::ListClients();
        
        $client_list_table = file_get_contents(dirname(__DIR__).'/views/list/clients/client-list.html');
        
        $table_row = file_get_contents(dirname(__DIR__).'/views/list/clients/client-list-item.html');
        
        $client_data = '';

        foreach ($table_clients_rows as $client_row) {
            $client_data .= str_replace( array('{client-first-name}', '{client-last-name}', '{client-age}', '{client-genre}', '{client-email}'),  array($client_row["first_name"], $client_row["last_name"], $client_row["age"], $client_row["gender"], $client_row["email"]), $table_row  );
        }
        $client_list_table = str_replace( '{client-list-items}', $client_data, $client_list_table );
        echo $client_list_table;

        ?>
            </div>
        </main>
    </body>
</html>