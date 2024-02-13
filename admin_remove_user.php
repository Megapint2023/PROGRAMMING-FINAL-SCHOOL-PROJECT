<?php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$username = $_GET['username'];

$query = "DELETE FROM userinfo WHERE username=?";
$stmt = $conn->prepare($query);

$stmt->bind_param("s", $username);

$stmt->execute();

$query = "DELETE FROM users WHERE username=?";
$stmt = $conn->prepare($query);

$stmt->bind_param("s", $username);

$stmt->execute();

if ($stmt->error) {
    echo "Error: " . $stmt->error;
} else {
    echo "User removed successfully!";
    header("Location: adminpage2.php");
}

$stmt->close();
$conn->close();
?>