<?php
//pengecekan kondisi variabel apakah sudah terisi dan benar atau masih kosong
if ($_POST['id'] != "" && $_POST['id'] >= 1) {


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
    $sql = "DELETE FROM buku_tamu 
        WHERE ID_BT='" . $_POST["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "New Record created successfully";
    } else {
        echo "Error creating New Record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    header("Location:/budi/tugas6/tugas.php");
} else {
    header("Location:/budi/tugas6/fail.php");
}
