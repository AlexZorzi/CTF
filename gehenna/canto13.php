<?php
session_start();

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 3){
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
      <div class='heading'>Canto XIII - Woods of Suicide</div>
<hr/>
<center>
  <img src="./functions/ulisse.php" width="100%"/>
  *
  <p>
    The Seventh Circle. The Second Ring. Violence against

  Oneself. Suicides and Squanderers

  Not yet had Nessus reached the other side,
  when we had set our steps within a wood,
  which was not marked by any path whatever.
  No green leaves there, but leaves of gloomy hue;
  no smooth and straight, but gnarled and twisted, twigs;
  nor was there any fruit, but poison-thorns.
  No thickets rough and dense as these are owned
  by those wild beasts, that hate the tilled estates
  that lie between the Cécina and Corneto.
  Herein those ugly Harpies make their nest,
  who drove the Trojans from the Strophades,
  with gloomy prophecies of future loss.
  Wide wings they have, and human necks and faces;
  their feet are clawed, and feathered their great bellies;
  they utter wailings on the uncouth trees.
  </p>
<hr />
<p>
  Dont forget to <u>open</u> up to these people.
</p>
</center>
      <audio id="audio1" style="display:none;" src="video/choir.mp3"></audio>

        <script>
          <?php if ($_SESSION["L"] > 3){ echo "document.getElementById(\"audio1\").play();";} else{ echo "";}  ?>

        </script>
      <center>
        <br /><br />
        <a class="<?php if ($_SESSION["L"] > 3){ echo "";} else{ echo "disabled";} ?>" id="jumpLink" href="<?php if ($_SESSION["L"] > 3 ){ echo "./dazio.php?d=skda2";} else{ echo "#";} ?>" >Canto XXXIV</a>

      </center>
   </body>
</html>
<!-- There is no god up here -->
