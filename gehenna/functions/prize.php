<?php
session_start();

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 4){
  session_destroy();
  header("Location: ../index.php");
}

$file = "https://images.stricted.net/lineageos/dreamlte/lineage-17.1-20211015-UNOFFICIAL-dreamlte.zip";
$type = 'image/jpeg';
header('Content-Type:'.$type);
header('Content-Disposition: attachment; filename=lineage-17.1-20211015-UNOFFICIAL-dreamlte.zip');
header('Content-Length: ' . filesize($file));
readfile($file);
 ?>
