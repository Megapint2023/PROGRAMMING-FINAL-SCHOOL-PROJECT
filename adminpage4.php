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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="adminpage.css">
  <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
  <script>
function omavaihda() {
  document.getElementById("teksti").innerHTML = 
  "Uusi teksti.";
}
</script>
 <!--  <style>

  </style> -->
 </head> 
 <body>

   <div class="header">
     <h1> ADMINISTRATOR PAGE: </h1>
   </div>

   <div class="row">

    <div class="col-3 col-s-3 menu">
      <ul>
       <a href="adminpage1.php" id="eiviiva"><li> INFO PAGE: </li></a>
       <a href="adminpage2.php" id="eiviiva"><li> USERS: </li></a>
       <a href="adminpage3.php" id="eiviiva"><li> CHAT HISTORY: </li></a>
       <a href="adminpage4.php" id="eiviiva"><li> ADDITIONAL: </li></a>
       <a href="logout.php" id="eiviiva"><li> LOG OUT: </li></a>
      </ul>
    </div>

    <div class="col-9 col-s-9">
      <h3> INFO: </h3>

     <div id="koodi"><pre>
     DEVELOPER:
     This page is empty (can be used for future development).

      </pre></div> 

    </div>

    </div>
   </div>

   <div class="footer">
   <p>NÄYTTÖ</p>
   </div>

 </body>
</html>