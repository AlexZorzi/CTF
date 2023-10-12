<?php
session_start();
//print_r($_SESSION);

if (!isset($_SESSION["L"]) || !$_SESSION["L"] >= 1){
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
               <a class="title" href="./goya.jpg">USELESS</a> &nbsp;
               <a class="title" href="https://paypal.me/stricted2">DONATE</a>
            </div>
         </div>
      </center>
      <br>
      <br>
      <div style="margin-bottom: 3ch;text-transform: none;">
      </div>
      <div class='heading'>Canto III - Caronte</div>
      <hr/>
      <center>
        <img src="./images/caronte.jpg" width="100%"/>
        <br />
        *
        <p>

          Behold then, coming toward us in a boat,
an agèd man, all white with ancient hair,
who shouted: “Woe to you, ye souls depraved!
Give up all hope of ever seeing Heaven!
I come to take you to the other shore,
into eternal darkness, heat and cold.
And thou that yonder art, a living soul,
withdraw thee from those fellows that are dead.”
But when he saw that I did not withdraw,
he said: “By other roads and other ferries
shalt thou attain a shore to pass across,
not here; a lighter boat must carry thee.”

        </p>
        <hr />
        <br />
        <p style="margin-bottom:2ch;">
          - It seems we are stuck here...
          <br /><br />
          - But we need to go deeper!
          <br /><br />
          - There is nowhere to go...
          <br /><br />
          - Only one person can save us now, the pagan god Saturn, Find Goya for the key...
        </p>
      </center>
      - <input onkeyup="change(this)" style="background-color:black; border: 0px; height: 3ch;"  autocomplete="false" placeholder="Whisper to Saturn"/>
      <audio id="audio1" style="display:none;" src="video/choir.mp3"></audio>

        <script>
        // Not this time Anan :D
        function change(el){
          console.log(el.value);
          if(el.value.length == 6){
            $.get("functions/fiere.php?Whisper="+el.value, function(data){
               console.log(data);
               if (data != ""){
                 $("#jumpLink").attr("href", data);
                 $("#jumpLink").attr("class", "");
                 document.getElementById("audio1").play();
               }
             });
          }
        }

        </script>
      <center>
        <br /><br />
        <a class="<?php if ($_SESSION["L"] > 1){ echo "";} else{ echo "disabled";}  ?>" id="jumpLink" href="<?php if ($_SESSION["L"] > 1){ echo "./dazio.php?d=bsmsk3";} else{ echo "#";} ?>" >Canto VIII</a>

      </center>
   </body>
</html>
<!-- There is no god up here -->
