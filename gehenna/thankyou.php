<?php
session_start();
//print_r($_SESSION);

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 4){
  session_destroy();
  header("Location: ./index.php");
}

 ?>

<!-- what are you looking for? -->
<html>
   <head>
      <meta property="og:image" content="https://alexzorzi.it/gehenna/images/schicchi.jpg" />
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link rel="stylesheet" href="style.css">
      <title>Gehenna</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   </head>
   <body>
      <br>
      <center>
         <div style="display: inline-block; vertical-align:middle;">
            <b>Gehenna</b>
            <br>
            <hr/>
            <div style="text-align: justify;display: inline-block; width: 100%;">
               <a class="title" href="https://en.wikipedia.org/wiki/Saturn_Devouring_His_Son">WIKI</a> &nbsp;
               <a class="title" href="./noescape.jpg">USELESS</a> &nbsp;
               <a class="title" href="https://paypal.me/stricted2">DONATE</a>
            </div>
         </div>
      </center>
      <br>
      <br>
      <div style="margin-bottom: 3ch;text-transform: none;">
      </div>
      <div class='heading'>Thank You For Playing!</div>
<hr/>
<center>
  <img src="https://alexzorzi.it/gehenna/images/schicchi.jpg" width="100%"/>
  <p>
    Thank You For Playing! I hope you had Fun.
    <br />
    - Alles
  </p>
  <a href="./functions/prize.php"><h1>~ Ascend To Heaven ~</h1></a>
   </body>
</html>
<!-- There is no god up here -->
