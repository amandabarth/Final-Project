<!-- Connecting -->
<?php
$databaseName = 'ACBARTH_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname='.$databaseName;
$username = 'acbarth_writer';
$password = 'o8okTVyZbkr4';
$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection Complete -->