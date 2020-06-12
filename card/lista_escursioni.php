<?php
require "../libs/header.php";
require "../libs/dbconnection.php";

// Lista delle escursioni disponibili

try {
  $sql = "SELECT * FROM tbl_escursione";
  $rs = $dbConnection->query($sql);
} catch (PDOException $e) {
  die('Errore nella lettura dei dati');
}
?>

<div class="card-deck">
  <?php while($row = $rs->fetch()): ?>
    <div class="card">
      <div class="p-3 mb-2 bg-light">
        <h3 class="text-primary" style="text-align:center;"><?= $row['meta'] ?></h3>
        <h5 class="text-danger" style="text-align:center;"><?= $row['costo'] ?>.00 €</h5>
		<h5 class="text-info" style="text-align:center;">Posti disponibili: <?= $row['posti_disponibili'] ?></h5>
		<h5 class="text-info" style="text-align:center;">Difficoltà: <?= $row['difficolta'] ?></h5>
      </div>
      <div>
        <img src="../images/<?= $row['image'] ?>" alt="..." class="img-thumbnail">
		<a href="../doc/<?= $row['attrezzatura'] ?>" class="btn btn-primary stretched-link" 
		download="<?= $row['meta'] ?>" ><?= $row['meta'] ?> - Clicca qui per le info!</a>
      </div>
      <div class="p-3 mb-2 bg-light">
        <form action="aggiungi.php?id=<?= $row['id']?>" method="post" class="form-inline">
        <button type="submit" class="btn btn-success">Iscriviti</button>
        </form>
      </div>
    </div>
  <?php endwhile; ?>
</div>

<?php require "../libs/footer.php"; ?>
