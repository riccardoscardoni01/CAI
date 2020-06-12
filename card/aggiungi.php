<?php
require "../libs/dbconnection.php";

// Iscrizione ad una escursione
if ($_GET['id'] ?? false){
  $id = $_GET['id'];

  try {  
    $sql = "SELECT * FROM tbl_escursione WHERE id=$id";
    $rs = $dbConnection->query($sql);
    while($row = $rs->fetch()){
        $sql_ = "INSERT INTO tbl_partecipazione(codFUtente, idEscursione, data_) VALUE(:CodFUtente, :idEscursione, :data_)";
        $statement = $dbConnection->prepare($sql_);
        $statement->execute(["CodFUtente" => 'SCRRCR01A15L781K',
                             "idEscursione" => $row['id'],
                             "data_" => date("Y-m-d") ]);
      }
  } catch (PDOException $e) {
    die('Errore nella lettura dei dati.');
  }
}
header("location: mie_escursioni.php");
?>
