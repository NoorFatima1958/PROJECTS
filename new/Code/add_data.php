<?php
// Connect to your database (replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the URL from the form data
$url = $_POST["url"];

// Insert the data into the database
$sql = "INSERT INTO d_article (url) VALUES ('$url')";

if ($conn->query($sql) === TRUE) {
    echo "Data added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
