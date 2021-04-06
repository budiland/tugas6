<!DOCTYPE html>
<html>
<!-- Link CSS -->
<link rel="stylesheet" href="./style.css">

<head>
    <title>Tambah Tamu</title>

</head>

<body>
    <div class="kotak">
        <h1 class="judul2">Tambah Tamu</h1>
        <!--menggunakan mthod post untuk mengirimkan inputan tambah_check.php untuk dicek-->
        <form method="POST" action="tambah_check.php">
            <table class="khusus">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name"></input></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></input></td>
                </tr>
                <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td><input type="text" name="isi"></input></td>
                </tr>
                <tr>
                    <!-- Tombol untuk mengirim -->
                    <td colspan="3">
                        <input type="submit" class="submit" name="btntambah" value="TAMBAH">
                    </td>
                    <!-- tombol untuk reset -->
                    <td colspan="3">
                        <input type="reset" class="reset" name="reset" value="RESET">
                    </td>

                </tr>
    </div>
</body>

</html>