<?php
include("koneksi.php");

// jika tombol submit sudah diklik
if (isset($_POST['submit'])) {
    // ambil data dari form
    $nim = $_POST['nim'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $program_studi = $_POST['program_studi'];
    $keahlian = implode(",", $_POST['keahlian']);

    // buat query
    $sql = "insert into mahasiswa(nim, nama_mahasiswa, jenis_kelamin, program_studi, keahlian) 
    values('$nim','$nama_mahasiswa','$jenis_kelamin','$program_studi', '$keahlian')";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: index.php');
    } else {
        echo "Gagal menambahkan data mahasiswa <a href=index.php>Halaman Index</a>";
    }
} else {
    echo "Anda tidak mempunyai akses <a href=index.php>Halaman Index</a>";
}
