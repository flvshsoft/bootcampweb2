<?php
session_start();
include("../../koneksi/index.php");

// If upload button is clicked ...
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $store = "INSERT INTO siswa (`nama`, `id_kelas`, `alamat`, `jenis_kelamin`)
    VALUES (
        '" . $nama . "',
        '" . $kelas . "',
        '" . $alamat . "',
        '" . $jenis_kelamin . "'
        )";
    mysqli_query($conn, $store);
}
echo "<script>window.location.href = \"../../index.php?r=siswa\" </script>";
