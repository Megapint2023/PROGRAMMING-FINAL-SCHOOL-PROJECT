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
     Message leght limit is set to 255 CHARS. 
     "Empty" messages in database means that user exceeded the limit.

      </pre></div> 

      <h3>CHAT:</h3>
     <?php
        require_once 'login.php'; 

        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die("Fatal Error");

        $query = "SELECT * FROM chat";
        $result = $conn->query($query);
        if (!$result) die("Database access failed");

        echo "<table><tr><th>id:</th><th>Username:</th><th>Timestap:</th><th>Message:</th></tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['id']) . "</td>";
          echo "<td>" . htmlspecialchars($row['username']) . "</td>";
          echo "<td>" . htmlspecialchars($row['timestamp']) . "</td>";
          echo "<td>" . htmlspecialchars($row['message']) . "</td>";
          echo "<td> <a href='admin_remove_message.php?id=" . urlencode($row['id']) . "'>Remove Message</a></td>";
          
          echo "</tr>";
        }

        echo "</table>";

        $result->close();
        $conn->close();
    ?>
    </div>

    </div>
   </div>

   <div class="footer">
   <p>NÄYTTÖ</p>
   </div>

 </body>
</html>