<?php
// Collegamento al database in modalità PDO
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbDatabase = "cai";
$dbCharset = 'utf8mb4';
$dbDsn = "mysql:host=$dbHost; dbname=$dbDatabase; charset=$dbCharset";
$dbOpt = [PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false];

try {
  $dbConnection = new PDO($dbDsn, "$dbUsername", $dbPassword, $dbOpt);
} catch (PDOException $e) {
  die('Impossibile connettersi al database server:<br>' . $e);
}
?>
