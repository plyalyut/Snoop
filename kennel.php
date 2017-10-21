<?php
$serverName = "snoop.database.windows.net";
$connectionOptions = array(
    "Database" => "Snoop",
    "Uid" => "snoop",
    "PWD" => "hackharvard20!7"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

//fetch all the form data
$name = $_GET["demo-name"];
$email = $_GET["demo-email"];

//put data into server
$data= "INSERT INTO shelter (ShelName, Email)
VALUES ($name, $emaik)";

$postResults= sqlsrv_query($conn, $tsql);
echo ("Reading data from table" . PHP_EOL);
if ($getResults == FALSE)
    echo (sqlsrv_errors());

sqlsrv_free_stmt($getResults);
?>
