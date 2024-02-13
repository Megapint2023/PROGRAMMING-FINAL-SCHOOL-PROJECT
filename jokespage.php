<?php
    session_start();
    //koodi tarkistaa onko sessio päällä, tämä sen takia ettei voi kietää kirjautumista 
    //sennion panee alkuun login_process.php tiedosto
    if (!isset($_SESSION['username'])) {
    header("Location: loginpage.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <link href="style.css" rel="stylesheet">
<!-- <style>
</style> -->

</head>
<body class="main-page">

<div class="header">
<img src= "images/header.jpg" style="height:240px; max-width: 100%;">
<h1>JOKERS & SMOKERS</h1>
  <p>Home of silly people and the best collection of funny stuff...</p>
</div>

<div class="topnav">
  <a href="mainpage.php">MAIN</a>
  <a href="jokespage.php">JOKES</a>
  <a href="powerlinespage.php">"POWER LINES"</a>
  <a href="legendspage.php">LEGENDS</a>
  <a href="chatpage.php">CHAT</a>
  <a href="logout.php" style="float:right">LOG OUT</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">

      <h2>CHUCK NORRIS JOKES:</h2>
      <h3>Everyone knows memes and jokes about the celebrity Chuck Norris! </h3>
      <img src= "images/chucknorrisjokes.jpg" style="height:240px;">
      <p>Chuck Norris doesn't read books. He stares them down until he gets the information.</p>
      <p>Time waits for no man. Unless that man is Chuck Norris!</p>
      <p>The flu gets a Chuck Norris shot every year...</p>
      <p>Chuck Norris can start a fire with an ice cube!</p>
      <p>Chuck Norris's cowboy boots are made from real cowboys.</p>
      <p>Freddy Krueger has nightmares about Chuck Norris!!!</p>
      <p>Chuck Norris invented airplanes because he was tired of being the only person that could fly.</p>
      <p>Chuck Norris doesn't need to shave. His beard is scared to grow.</p>
      <p>Chuck Norris can clap with one hand!</p>
      <p>Chuck Norris beat the sun in a staring contest.</p>
      <p>Chuck Norris can sneeze with his eyes open.</p>
      <p>It takes Chuck Norris 20 minutes to watch 60 Minutes.</p>
      <p>When Chuck Norris was born, the only person who cried was the doctor.</p>
      <p>Chuck Norris spices up his steaks with pepper spray!!!</p>
      <p>Chuck Norris doesn't wear a watch. He decides what time it is!</p>
      </div>

    <div class="card">
      <h2>THE BEST "YOUR MOMMA" JOKES:</h2>
      <img src= "images/yourmommajokes.jpg" style="height:240px;">
      <p>Yo mama is so stupid, she tripped over a wireless network!</p>
      <p>Yo mama's teeth are so yellow when she smiles, the traffic slows down!</p>
      <p>Yo mama is so mean, even Hello Kitty said goodbye.</p>
      <p>Yo mama's so poor, she can't even afford to pay attention...</p>
      <p>Yo mama's so dumb, she failed a survey!</p>
      <p>Yo mama's so poor that ducks bring bread to "her".</p>
      <p>Yo mama's so mean, they wont serve her happy meals at McDonald's!</p>
      <p>Yo mama's so poor, Nigerian princes wire "her" money.</p>
      <p>Yo mama is so lazy, she woke up from a coma and went to sleep!</p>
    </div>
  </div>

  <div class="rightcolumn">
    <div class="card">
    <?php 
       echo '<span style="font-size: larger; color: green;"><strong>LOGGED IN:</strong></span> <span>' . $_SESSION['username'] . '</span>'; 
     ?>
     <?php
     $currentDateTime = date("Y-m-d");
      echo '<p>Date: ' . $currentDateTime . '</p>';
     ?>
     <div id="clock"></div>
    </div>
    

   <script>
   function updateClock() {
    var now = new Date();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var seconds = now.getSeconds();

    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    var timeString = hours + ":" + minutes + ":" + seconds;

    document.getElementById("clock").innerText = "Current Time: " + timeString;
    }
    setInterval(updateClock, 1000);
    updateClock();
    </script>

    <div class="card">
      <h2>MOST POPULAR POST:</h2>
      <h3>I always tell the truth (even when i lie)</h3>
      <img src="images/scarface1.jpg" style="height: auto; max-width: 100%;">
    </div>

    <div class="card">
    <h2>POST OF THE MONTH:</h2>
      <h3>If you want to "follow me"... this is how i look like from behind -></h3>
      <img src="images/follow.jpg" style="height: auto; max-width: 100%;">
    </div>
  </div>
</div>

<div class="footer">
<h4>NÄYTTÖ</h4>
</div>

</body>
</html>