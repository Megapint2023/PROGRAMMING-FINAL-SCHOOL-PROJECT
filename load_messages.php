<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) {
    die("Fatal Error: Unable to connect to the database.");
}

$query = "SELECT * FROM chat ORDER BY timestamp DESC LIMIT 50"; 

$stmt = $conn->prepare($query);
$stmt->execute();

if (!$stmt->error) {

    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $message = $row['message'];
        $timestamp = $row['timestamp'];

        $formattedTimestamp = date("d-m H:i:s", strtotime($timestamp));

        echo "<div class='chat-message'>";
        echo "<span class='chat-time' style='color: green;'><b>$formattedTimestamp:</b></span>";
        echo "<span class='username'><b>$username:</b></span>";
        echo "<span class='message'>$message</span>";
        echo "</div>";
        
        
    }

    $result->close();
} else {
    echo "Error retrieving messages from the database.";
}

$stmt->close();
$conn->close();
?>
