<?php
$serverName = "snoop.database.windows.net";
$connectionOptions = array(
    "Database" => "Snoop",
    "Uid" => "snoop",
    "PWD" => "hackharvard20!7"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

?>
