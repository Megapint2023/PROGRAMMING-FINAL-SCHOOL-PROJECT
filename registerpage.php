<!DOCTYPE html>
<?php
require_once 'add_user.php'; 
?>
<html>
<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet">
<!-- <style>
</style> -->
</head>
<body class="main-page">

<div class="header">
<img src= "images/header.jpg" style="height:200px; max-width: 100%;">
  <h1>JOKERS & SMOKERS</h1>
  <p>Home of silly people and the best collection of funny stuff...</p>
</div>

<div class="topnav">
  <a href="loginpage.php">LOG IN</a>
</div>

<div class="row">
 <div class="leftcolumn">
  <div class="form">  
    
      <h2>REGISTRATION REQUIRED:</h2>
      <form action="registerpage.php" method="post">
        
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

        <input type="submit" value="REGISTER">
      </form>

    </div>

  </div>

  </div>
</div>

<div class="footer">
<h4>NÄYTTÖ</h4>
</div>

</body>
</html>