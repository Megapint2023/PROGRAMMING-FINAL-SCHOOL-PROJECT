<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$username = $_GET['id'];

$query = "DELETE FROM chat WHERE id=?";
$stmt = $conn->prepare($query);

$stmt->bind_param("i", $username);

$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "Message removed successfully!";
    header("Location: adminpage3.php");
}

$stmt->close();
$conn->close();
?>