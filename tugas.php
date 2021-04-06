<!DOCTYPE html>
<!-- Link Style CSS -->
<link rel="stylesheet" href="./style.css">
<!-- PHP -->
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
?>

<head>
    <title>Buku Tamu</title>
</head>

<body>
    <div class="background">
        <!-- Side Bar -->
        <div class="field-kiri">
            <!-- Pembuatan Link Button -->
            <a href="./tambah.php" class="button">
                Tambah Tamu
            </a>
            <a href="./hapus.php" class="button">
                Hapus Tamu
            </a>
        </div>
        <!-- Bagian Kanan -->
        <div class="field-kanan">
            <h1 class="judul">Buku Tamu</h1>
            <br>
            <table style="width:100%" class="tabel">
                <tr>
                    <!-- Header Tabel -->
                    <th>ID Buku Tamu</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Isi</th>
                </tr>
                <tr>
                    <td>
                        <!-- PHP -->
                        <?php
                        // Select buku_tamu
                        $sql = "select * from buku_tamu";
                        $result = mysqli_query($conn, $sql);
                        // Read data tabel row ID_BT
                        if (mysqli_num_rows($result) > 0) {
                            // ouput data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<br>" .
                                    $row["ID_BT"];
                            }
                        } else {
                            // Ketika data row kosong
                            echo "0 results";
                        }

                        ?>
                    </td>
                    <td>
                        <?php
                        $sql = "select * from buku_tamu";
                        $result = mysqli_query($conn, $sql);
                        // Read data tabel row NAMA
                        if (mysqli_num_rows($result) > 0) {
                            // ouput data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<br>" .
                                    $row["NAMA"];
                            }
                        } else {
                            echo "0 results";
                        }

                        ?>
                    </td>
                    <td>
                        <?php
                        $sql = "select * from buku_tamu";
                        $result = mysqli_query($conn, $sql);
                        // Read data tabel row EMAIL
                        if (mysqli_num_rows($result) > 0) {
                            // ouput data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<br>" .
                                    $row["EMAIL"];
                            }
                        } else {
                            echo "0 results";
                        }

                        ?>
                    </td>
                    <td>
                        <?php
                        $sql = "select * from buku_tamu";
                        $result = mysqli_query($conn, $sql);
                        // Read data tabel row ISI
                        if (mysqli_num_rows($result) > 0) {
                            // ouput data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<br>" .
                                    $row["ISI"];
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                    </td>
                </tr>
            </table>
        </div>

    </div>

</body>

</html>