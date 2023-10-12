<?php
if(isset($_SERVER["HTTP_SEC_FETCH_DEST"]) && $_SERVER["HTTP_SEC_FETCH_DEST"] == "image"){
  $file = "../images/canto13.jpg";
  $type = 'image/jpeg';
  header('Content-Type:'.$type);
  header('Content-Disposition: attachment; filename=canto13.jpg');
  header('Content-Length: ' . filesize($file));
  readfile($file);
}else {
  session_start();
  if (isset($_SESSION["L"]) && $_SESSION["L"] == 3) {
    $_SESSION["L"] = 4;
  }else {
    session_destroy();
    header("Location: ../index.php");
  }
  $file = "../images/dalì.jpg";
  $type = 'image/jpeg';
  header('Content-Type:'.$type);
  header('Content-Disposition: attachment; filename=dalì.jpg');
  header('Content-Length: ' . filesize($file));
  readfile($file);
}


 ?>
