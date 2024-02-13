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

     Registering or adding users splits information into two databases.
     Even for administrator passwords are hidden as there is no purpouse 
     for them to be shown.
     DB's are linked so REMOVING or ADDING users will effects them both.
     Ensuring functionality and no piling of unwanted data.
     (Technically code stores / removes data from "userinfo" DB first).

     Main goal = simplicity, cleanliness and easy to use.

      </pre></div> 

      <?php
      require_once 'admin_add_user.php';
      ?>

    <div id="add_user">
        <h3>ADD USER:</h3>
        <form action="adminpage2.php" method="post">

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="text" name="password" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="phone">Phonenumber:</label>
        <input type="text" name="phone" required><br>

        <label for="email">Email:</label>
        <input type="text" name="email" required><br>

        <input type="submit" value="ADD USER">
        </form>
    </div>

      <h3>USERS:</h3>
     <?php
        require_once 'login.php'; 

        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die("Fatal Error");

        $query = "SELECT * FROM userinfo";
        $result = $conn->query($query);
        if (!$result) die("Database access failed");

        echo "<table><tr><th>Username:</th><th>Name:</th><th>Address:</th><th>Phone:</th><th>Email:</th></tr>";

        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['username']) . "</td>";
          echo "<td>" . htmlspecialchars($row['name']) . "</td>";
          echo "<td>" . htmlspecialchars($row['address']) . "</td>";
          echo "<td>" . htmlspecialchars($row['phone']) . "</td>";
          echo "<td>" . htmlspecialchars($row['email']) . "</td>";
          echo "<td> <a href='admin_remove_user.php?username=" . urlencode($row['username']) . "'>Remove User</a></td>";
          
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