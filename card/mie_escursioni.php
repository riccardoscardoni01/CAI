<?php
require "../libs/header.php";
require "../libs/dbconnection.php";

// Lista delle escursioni dove sei iscritto

try {
  $sql = "SELECT * FROM tbl_escursione A, tbl_socio B, tbl_partecipazione C WHERE A.id = C.idEscursione AND B.codF = 'SCRRCR01A15L781K'";
  $rs = $dbConnection->query($sql);
} catch (PDOException $e) {
  die('Errore nella lettura dei dati.');
}
?>

<table class="table">
  <tr class="bg-dark text-light">
    <td><p>Meta</p></td>
    <td><p>Difficoltà</p></td>
    <td><p>Costo</p></td>
	<td><p>data</p></td>
    <td><p> </p></td>
  </tr>
<?php $count = 0?>
<?php while($row = $rs->fetch()): ?>
  <tr class="<?php if ($count%2==0) { echo "bg-light" ;} else { echo "bg-white"; } ?>">
    <td><p><?= $row['meta'] ?></p></td>
    <td><p><?= $row['difficolta'] ?></p></td>
    <td><p><?= $row['costo']?> €</p></td>
	<td><p><?= $row['data_']?></p></td>
    <td>
      <form action="rimuovi.php?id=<?= $row['id']?>" method="post" class="form-inline">
        <button type="submit" class="btn btn-warning">Rimuovi</button></td>
      </form>
  </tr>
  <?php $count++ ?>
<?php endwhile; ?>
</table>

<?php require "../libs/footer.php"; ?>
