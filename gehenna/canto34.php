<?php
session_start();

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 4){
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
     <style>
     body{
       font-family: Consolas, Monospace, Courier;
        font-size: 16px;
        max-width: none;
        px
        ; */
        /* padding-left: 2%; */
        padding-right: none;
        margin: 0 auto;
        padding: 0;
        background: #000;
     }
     .magicdiv {
       height: 99999px; !important
       background-image:         linear-gradient(top, #000 0%, #fff); /* W3C */
       background-image:    -moz-linear-gradient(top, #000 0%, #fff); /* FF3.6+ */
       background-image: -webkit-linear-gradient(top, #000 0%, #fff); /* Chrome10+,Safari5.1+ */
     }
     .magicdiv2{
       padding-left: 10%;
       padding-right: 10%;
     }
     </style>
     <div class="magicdiv2">

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
      <div class='heading'>Canto XXXIV - Lucifer</div>
<hr/>
<center>
  <img src="./images/canto34.jpg" width="100%"/>
  *
  <p>
    With six eyes he was weeping, and his tears
  and bloody slaver trickled o’er three chins.
  In each mouth, as a heckle would have done,
  a sinner he was crushing with his teeth,
  and thus was causing pain to three of them.
  To him who was in front of us the biting
  was nothing to the clawing, for at times
  his back remained completely stripped of skin.
  “That soul up there which hath the greatest pain
  Judas Iscariot is,” my Teacher said,
  “who hath his head within, and plies his legs
  without. Of the other two, whose heads are down,
  Brutus is he who from the black snout hangs;
  see how he writhes, and utters not a word!
  Cassius the other is, who so big-limbed
  appears. But night is coming up again,
  and now ’t is time to leave, for we ’ve seen all.”
  Then, as it pleased him, I embraced his neck,
  and he availed himself of time and place,
  and when the wings were opened wide enough,
  he firmly grasped the shaggy flanks, and then
  from tuft to tuft he afterward descended
  between the matted hair and frozen crusts.
  </p>
<hr />
</center>
      <audio id="audio1" style="display:none;" src="video/choir.mp3"></audio>

        <script>
          <?php //if ($_SESSION["L"] > 4){ echo "document.getElementById(\"audio1\").play();";} else{ echo "";}  ?>

        </script>
      <center>
        <br /><br />
        <a class="<?php if ($_SESSION["L"] > 4){ echo "";} else{ echo "disabled";} ?>" id="jumpLink" href="<?php if ($_SESSION["L"] > 4 ){ echo "./dazio.php?d=skda2";} else{ echo "#";} ?>" >Canto VIII</a>
      </center>
    </div>

      <div class="magicdiv">

      </div>
      <center style="background-color:white; ">
        <a href="./dazio.php?d=jsdi3">
          <img src="./images/purgatory.jpg" width="50%" style="width: -webkit-fill-available;" />
        </a>
      </center>

   </body>
</html>
<!-- There is no god up here -->
