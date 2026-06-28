<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sunset_hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("connection filed" . $conn->connect_error);
} else {
    echo "connection successful";
}

//run the quary===================
$sql = "SELECT * FROM room_bookings";

$results = $conn->query($sql);
if ($results->num_rows > 0) {
    while ($row = $results->fetch_assoc()) {
        echo $row["GuestName"] . "<br>";
    }
}

?>
