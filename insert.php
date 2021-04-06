<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert New Record
$sql = "insert into liga (kode,negara,champion) values ('Esdsadasdng','Engdsadsadsalish','3')";
if (mysqli_query($conn, $sql)) {
    echo "New Record created successfully";
} else {
    echo "Error creating New Record: " . mysqli_error($conn);
}

mysqli_close($conn);
