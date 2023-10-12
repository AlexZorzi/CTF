<?php
/*
caronte = famao2
*/
session_start();

if (isset($_GET["d"])) {
  switch ($_GET["d"]) {

    case 'imalp3':
      $_SESSION["L"] = 0;
      $destination = "index.php";
      $video_src = "darkwood.mp4";
      break;

    case 'famao2':
      $destination = "canto3.php";
      $video_src = "canto3.mp4";
      break;

    case 'bsmsk3':
      $destination = "canto8.php";
      $video_src = "canto8.mp4";
      break;

    case 'mapo98':
      $destination = "canto13.php";
      $video_src = "canto13.mp4";
      break;

    case 'skda2':
      $destination = "canto34.php";
      $video_src = "canto34.mp4";
      break;

    case 'jsdi3':
      $destination = "thankyou.php";
      $video_src = "fine.mp4";
      break;



    default:
      header("Location: index.php");
      exit;
      break;
  }
}else {
    header("Location: index.php");
    exit;
}



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <style>
     video::-webkit-media-controls {
       display:none !important;
     }
     </style>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body style="margin:0px; background-color:black;">
     <video id="video" width="100%" src="<?php echo "./video/".$video_src; ?>"></video>
   </body>
   <script>
   $( document ).ready(function() {
     var elem = document.getElementById("video");
     req = elem.requestFullScreen || elem.webkitRequestFullScreen || elem.mozRequestFullScreen;
        req.call(elem);
        elem.play();

        $('#video').on('ended',function(){
            window.location.replace("./<?php echo $destination; ?>");
          });
   });
   </script>
 </html>
