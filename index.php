<?php
include("koneksi.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>:: Data Mahasiswa::</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <h3 style="margin:20px 0px 5px 0px">Data Mahasiswa</h3>
            <hr>
            <a href="tambah_form.php" class="btn btn-success mt-2">Tambah Data</a>
            <table class="table table-striped mt-4">
                <thead>
                    <tr class="info">
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Program Studi</th>
                        <th>Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <!-- Menampilkan data mahasiswa dari database -->
                <?php
                $sql = "select * from mahasiswa";
                $query = mysqli_query($koneksi, $sql);

                while ($mhs = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . $mhs['nim'] . "</td>";
                    echo "<td>" . $mhs['nama_mahasiswa'] . "</td>";
                    echo "<td>" . $mhs['jenis_kelamin'] . "</td>";
                    echo "<td>" . $mhs['program_studi'] . "</td>";
                    echo "<td>" . $mhs['keahlian'] . "</td>";
                    echo "<td>";
                    echo "<a href='edit_form.php?id=" . $mhs['id'] . "' class='btn btn-primary'>Edit</a> &nbsp";
                    echo "<a href='hapus.php?id=" . $mhs['id'] . "' class='btn btn-danger'>Hapus</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>