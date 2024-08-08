<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST["id"];

$sql = "DELETE FROM d_article WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
