<?php
require "../libs/dbconnection.php";

// Rimozione iscrizione ad una escursione

if ($_GET['id'] ?? false){
  try {
    $sql = "DELETE FROM tbl_partecipazione WHERE idEscursione=:id";
    $statement = $dbConnection->prepare($sql);
    $statement->execute(["id" => $_GET['id']]);
  } catch (PDOException $e) {
    die('Errore nella lettura dei dati.');
  }
}
header("location: mie_escursioni.php");

?>
