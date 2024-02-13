<?php
require_once 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $queryUsers = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $resultUsers = $conn->query($queryUsers);

    if (!$resultUsers) {
        echo "Error adding user: " . $conn->error;
        exit();
    }

    $queryUserinfo = "INSERT INTO userinfo (username, name, address, phone, email) VALUES ('$username', '$name', '$address', '$phone', '$email')";
    $resultUserInfo = $conn->query($queryUserinfo);

    if (!$resultUserInfo) {
        echo "Error adding user info: " . $conn->error;
        exit(); 
    }

    echo "Registration successful!";
    header("Location: loginpage.php");
    exit();
}
?>