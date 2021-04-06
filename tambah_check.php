<?php
//pengecekan kondisi variabel apakah sudah terisi atau kosong
if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['isi'] != "") {
    //if boolean check bernilai true, maka akan insert tabel buku_tamu

    // Koneksi Database
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
    $sql = "INSERT INTO buku_tamu (NAMA, EMAIL, ISI)
        -- Insert menggunakan data inputan
        VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["isi"] . "')";
    if (mysqli_query($conn, $sql)) {
        echo "New Record created successfully";
    } else {
        echo "Error creating New Record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    // kembali ke laman utama
    header("Location:/budi/tugas6/tugas.php");
} else {
    header("Location:/budi/tugas6/fail.php");
}
