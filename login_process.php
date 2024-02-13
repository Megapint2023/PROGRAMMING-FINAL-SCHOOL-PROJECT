<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
//I made an exception -> code checks first if ADMIN is logging in -> redirects to admin page if u/p match (u/p are modified in the following line).
    if ($username === 'BRUCE' && $password === 'ALMIGHTY') {  
        session_start();
        $_SESSION['username'] = $username;
        header("Location: adminpage1.php");
        exit();
    }

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['password']) {
            session_start();
            $_SESSION['username'] = $username;
            //aloittaa session jonka mainpage.php tarkistaa, jottei voi kiertää kirjautumista
            header("Location: mainpage.php");
            exit();
        } else {
            echo "Wrong username or password.";
            header("Location: registerpage.php");
            exit();
        }
    } else {
        echo "Wrong username or password.";
        header("Location: loginpage.php");
        exit();
    }

    $conn->close();
}
?>