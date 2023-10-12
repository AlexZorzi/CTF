<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:black;">
    <center>
      <h1 onclick="trigger()" style="color:white;">Enter</h1>
      <h3  style="color:white;">Headphones are suggested</h3>
      <h3  style="color:white;">Fullscreen is suggested (press F11)</h3>

    </center>
    <script>
      function trigger(){
        document.body.requestFullscreen();
        document.body.webkitRequestFullscreen();
        window.location.href = "index.php?Click=1";
      }
    </script>
  </body>
</html>
