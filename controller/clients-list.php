<?php
require dirname(__DIR__).'/model/databaseactions.php';
require dirname(__DIR__).'/config.php';


$table_clients_rows = DatabaseActions::ListClients();

$client_list_table = file_get_contents(dirname(__DIR__).'/views/list/clients/client-list.html');
$table_row = file_get_contents(dirname(__DIR__).'/views/list/clients/client-list-item.html');

foreach ($table_clients_rows as $client_row) {
    $table_row .= str_replace( '{client-first-name}', $client_row["first_name"], $table_row  );
    $table_row .= str_replace( '{client-last-name}', $client_row["last_name"], $table_row  );
    $table_row .= str_replace( '{client-age}', $client_row["age"], $table_row  );
    $table_row .= str_replace( '{client-genre}', $client_row["gender"], $table_row  );
    $table_row .= str_replace( '{client-email}', $client_row["email"], $table_row  );

    $client_list_table .= str_replace( '{client-list-items}', $table_row, $client_list_table );
}

echo $client_list_table;