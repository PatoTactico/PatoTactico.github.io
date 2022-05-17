<?php
$servername = "localhost";
$username = "id18850177_user";
$password = "q]5oZl9DIIV(HSEi";
$dbname = "id18850177_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>