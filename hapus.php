<!DOCTYPE html>
<html>
<!-- Link CSS -->
<link rel="stylesheet" href="./style.css">

<head>
    <title>Hapus Tamu</title>

</head>

<body>
    <div class="kotak">
        <h1 class="judul2">Hapus Tamu</h1>
        <!--menggunakan mthod post untuk mengirimkan inputan hapus_check.php untuk dicek-->
        <form method="POST" action="hapus_check.php">
            <table class="khusus">
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input type="number" name="id"></input></td>
                </tr>
                <tr>
                    <!-- Tombol untuk mengirim -->
                    <td colspan="3">
                        <input type="submit" class="submit" name="btntambah" value="HAPUS">
                    </td>
                    <!-- tombol untuk reset -->
                    <td colspan="3">
                        <input type="reset" class="reset" name="reset" value="RESET">
                    </td>

                </tr>
    </div>
</body>

</html>