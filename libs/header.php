<?php
$title = "Club Alpino Italiano";
$subtitle = "Excelsior!";
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <title><?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <!-- caricamento bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="./product_list.php"><img src="../images/cai-wb.png" width="48" /> <?= $title ?></a>
  <h5><span class="badge badge-info"><?= $subtitle ?></span></h5>
  <!-- Links -->
  <ul class="navbar-nav">
    <a href="lista_escursioni.php"><h5 style="margin-left:100px" class="text-light"> Escursioni </h5></a>
    <a href="mie_escursioni.php"><h5 style="margin-left:50px" class="text-light"> Le mie escursioni </h5></a>
  </ul>

</nav>
<div class="container-fluid" style="margin-top:20px">
