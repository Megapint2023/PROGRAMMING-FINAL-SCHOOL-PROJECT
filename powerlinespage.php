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
    <h2 style="text-align: center;"> "KNOWLEDGE IS POWER" </h2>
      <img src="images/powerlines.jpg" style="height: auto; max-width: 100%;">
      <h3>"The man who asks questions is a fool for a minute, the man who does't ask is a fool for life".</h3>
      <h3>"Wise men turn their heads from drama and know they have better things to do".</h3>
      <h3>"A wise man doesn't look for the path to success, he paves it".</h3>
      <h3>"A wise person knows that moving mountains often requires moving one small pebble at a time".</h3>
      <h3>"Be rich in wisdom and you will be wealthy beyond measure".</h3>
      <h3>"Look to the question, not the answer".</h3>
      <h3>"A wise person has a big heart, a curious brain, and open ears".</h3>
      <h3>"True wisdom means knowing that you truly never knew anything".</h3>
      <h3>"Only the wise recognize that wisdom doesn't have to include words".</h3>
      <h3>"All wise people begin their journey of knowledge by learning to know themselves first and best".</h3>
      <h3>"Your words carry so much power. Always pack them with wisdom".</h3>
      <h3>"When given the choice, be wise in actions over wise in words."</h3>
      <h3>"The wise don't wait to enjoy the view from the top of the mountain, they recognize the beauty in the journey upwards".</h3>
      <h3>"Be wise enough to appreciate your past and recognize it isn't a part of your future".</h3>
      <h3>"A man full of wisdom doesn't need validation from anyone but himself".</h3>
      <h3>"Wise men will always raise other men up, never tear them down".</h3>
      <h3>"Wisdom is trusting the timing of the universe".</h3>
      <h3>"Wisdom is never accidental".</h3>
      <h3>"Foolish men tell you their worth. Wise men know their worth".</h3>
      <h3>"True king never has to say out loud that he's the king".</h3>
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