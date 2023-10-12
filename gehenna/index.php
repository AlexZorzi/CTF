<?php
session_start();
//print_r($_SESSION);
if(isset($_GET["Click"]) && $_GET["Click"] == "1"){
  $_SESSION["Click"] = 1;
}
if (!isset($_SESSION["Click"]) && $_SESSION["Click"] != 1){
  header("Location: ./firstClick.php");
  exit;
}
if (!isset($_SESSION["L"]) && !$_SESSION["L"] >= 0){
  header("Location: ./dazio.php?d=imalp3");
  exit;
}

 ?>

<!-- what are you looking for? -->

<html>
   <head>
     <meta property="og:image" content="https://alexzorzi.it/gehenna/images/schicchi.jpg" />
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <link rel="stylesheet" href="style.css">
      <title>The Abyss</title>
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
      <div class='heading'>The Abyss</div>
      <hr/>
      <center>
        <img src="./images/theAbyss.jpeg" width="100%"/>
        *
        <p>
        <br />
          When half way through the journey of our life
I found that I was in a gloomy wood,
because the path which led aright was lost.
And ah, how hard it is to say just what
this wild and rough and stubborn woodland was,
the very thought of which renews my fear!
So bitter ’t is, that death is little worse;
        </p>

        <div style="display: inline-flex;">
          <p class="fi" onclick="press(this.innerText)">↑</p>
          <p class="fi" onclick="press(this.innerText)">↓</p>
          <p class="fi" onclick="press(this.innerText)">←</p>
          <p class="fi" onclick="press(this.innerText)">→</p>
          <p class="fi" onclick="press(this.innerText)">A</p>
          <p class="fi" onclick="press(this.innerText)">B</p>
          <audio id="audio1" style="display:none;" src="video/choir.mp3"></audio>
          <audio id="lost" style="display:none;" src="video/lost.mp3"></audio>

        </div>


        <script>
        // Not this time Anan :D

        async function sha256(message) {
          const msgBuffer = new TextEncoder().encode(message);
          const hashBuffer = await crypto.subtle.digest('SHA-256', msgBuffer);
          const hashArray = Array.from(new Uint8Array(hashBuffer));
          const hashHex = hashArray.map(b => b.toString(16).padStart(2, '0')).join('');
          return hashHex;
        }
        var vittoria = false;
        var fiera = "";
        async function press(el){
          fiera += el;
          var shaed = await sha256(fiera);
          console.log(fiera);
          console.log(shaed);
          $.get("functions/fiere.php?leTre="+shaed, function(data){
             console.log(data);
             if (data != ""){
               $("#jumpLink").attr("href", data);
               $("#jumpLink").attr("class", "");
               document.getElementById("audio1").play();
               vittoria = true;
             }
             if (fiera.length >= 10){
              fiera = "";
              console.log(vittoria);
              if(!vittoria){
                document.getElementById("lost").play();
              }
            }
           });

          
        }
        document.onkeydown = checkKey;

        function checkKey(e) {
            e = e || window.event;
            if (e.keyCode == '38') {
                // up arrow
                press("↑")
            }
            else if (e.keyCode == '40') {
                // down arrow
                press("↓")
            }
            else if (e.keyCode == '37') {
                // left arrow
                press("←")
            }
            else if (e.keyCode == '39') {
                // right arrow
                press("→")
            }
            else if (e.keyCode == '65') {
                // right arrow
                press("A")
            }
            else if (e.keyCode == '66') {
                // right arrow
                press("B")
            }

        }
        </script>
      </center>

      <center>
        <a class="<?php if ($_SESSION["L"] > 0){ echo "";} else{ echo "disabled";} ?>" id="jumpLink" href="<?php if ($_SESSION["L"] > 0){ echo "./dazio.php?d=famao2";} else{ echo "#";} ?>" >Canto III</a>
      </center>
   </body>
</html>
<!-- There is no god up here -->
