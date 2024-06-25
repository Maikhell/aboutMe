<?php
$host = "localhost";
$username  = "root";
$passwoord = "";
$database = "acc_db";

$conn = new mysqli($host, $username, $passwoord, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->$connect_error);
} else {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userContact = $_POST['userContact'];
    $userMessage = $_POST['userMessage'];

    $sql = "INSERT INTO users_tb (userName, userEmail, userContact, userMessage) VALUES ('$username', $userEmail','$userEmail','$userEmail') ";
    if ($conn->query($sql) === TRUE) {
        echo "Recorded Succeessfully";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
