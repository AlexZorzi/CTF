<?php
session_start();
if(isset($_GET["leTre"]) && $_GET["leTre"] == "8a51debdab8497a2fabab49efeb590b53db3396ba800967d7e5c01a044f2f646"){
  $_SESSION["L"] = 1;
  echo "./dazio.php?d=famao2";
}
elseif(isset($_GET["Whisper"]) && $_GET["Whisper"] == "862910"){
  $_SESSION["L"] = 2;
  echo "./dazio.php?d=bsmsk3";
}
elseif(isset($_GET["Shame"]) && $_GET["Shame"] == "1"){
  $_SESSION["L"] = 3;
  echo "./dazio.php?d=mapo98";
}




 ?>
