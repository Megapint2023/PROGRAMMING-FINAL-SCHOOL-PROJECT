<?php

require_once 'login.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $usermsg = $_POST['message'];

    session_start();
    $username = $_SESSION['username'];

    $conn = new mysqli($hn, $un, $pw, $db);

    if ($conn->connect_error) {
        die("Fatal Error: Unable to connect to the database.");
    }

    $query = "INSERT INTO chat (username, message) VALUES (?, ?)";
    $stmt = $conn->prepare($query);

    $stmt->bind_param("ss", $username, $usermsg);
    $stmt->execute();

    if (!$stmt->error) {
        echo "Message posted successfully!";
    } else {
        echo "Error posting the message.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}
?>
