<?php
session_start();
//print_r($_SESSION);

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 2){
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
      <div class='heading'>Canto VIII - River of Wrath</div>
<hr/>
<center>
  <img src="./images/gola.jpg" width="100%"/>
  <p>
    They all were shouting: “At Filippo Argenti!”
the spirit of the wrathful Florentine
turning, meanwhile, his teeth against himself.
We left him there; of him I therefore tell
no more; but on mine ears there smote a wail,
hence I, intent ahead, unbar mine eyes.
  </p>
  <hr />
  <p>
    - Filippo Argenti: "DANTE HELP ME!, YOU CANT LEAVE ME HERE BY MISELF PLEASE DONT GO!"<br />

  </p>
  <p>
    What do you do?
  </p>
  <p id="shame">
    <?php if($_SESSION["L"] > 2){ echo "- ɎุɄ ĐɆ₵łĐɆĐ ₮ุ ⱠɆ₳VɆ Ⱨł₥ ⱧɆⱤɆ ⱧɄⱧ? -";} ?>
  </p>
</center>
      <audio id="audio1" style="display:none;" src="video/choir.mp3"></audio>

        <script>
        <?php if ($_SESSION["L"] > 2){ echo "document.getElementById(\"audio1\").play();";} else{ echo "";}  ?>

        $(window).bind('beforeunload', function(event) {
          $("#shame").text("- ɎุɄ ĐɆ₵łĐɆĐ ₮ุ ⱠɆ₳VɆ Ⱨł₥ ⱧɆⱤɆ ⱧɄⱧ? -");
          $.get("functions/fiere.php?Shame=1", function(data){
             if (data != ""){
               $("#jumpLink").attr("href", data);
               $("#jumpLink").attr("class", "");
               document.getElementById("audio1").play();
             }
           });
        	return "You Decided to leave him here huh?";
        });

        </script>
      <center>
        <br /><br />
        <a class="<?php if ($_SESSION["L"] > 2){ echo "";} else{ echo "disabled";} ?>" id="jumpLink" href="<?php if ($_SESSION["L"] > 2){ echo "./dazio.php?d=mapo98";} else{ echo "#";} ?>" >Canto XIII</a>

      </center>
   </body>
</html>
<!-- There is no god up here -->
