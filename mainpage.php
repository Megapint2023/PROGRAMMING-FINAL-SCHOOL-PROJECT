<?php
    session_start();
    //koodi tarkistaa onko sessio päällä, tämä sen takia ettei voi kietää kirjautumista 
    //session panee alkuun login_process.php tiedosto
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

      <h2>MESSAGE OF THE DAY:</h2>
      <h3>Welcome to the club! This is a place for funny people to share the funniest jokes, sayings and clever power lines. 
      Feel free to chat and discuss on the art of “funny” with other village idiots like yourself.
      As community we also maintain the comedians "hall of fame" with their most legendary jokes & power lines!</h3>
      <h2>How much wood would Chuck Norris chuck if Chuck Norris would chuck wood?</h2>
      <img src="images/chucknorris.jpg" style="height: auto; max-width: 100%;">
      <h4>Chuck Norris, celebrity & action star</h4>
      </div>

    <div class="card">
      <h2>"Wise man can learn more from stupid question than a fool from a wise anwser".</h2>
      <h3>Knowledge and power combined into small sentences like these are what we call 
        the "wisdom power lines".
        Words such as these are very hard to come by these days. 
        Learn to understand the wisdom they posess... the sooner the better.</h3>
        <img src="images/wiseman.jpg" style="height: auto; max-width: 100%;">
      <h4>Raymond Reddington "The Blacklist"</h4>
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