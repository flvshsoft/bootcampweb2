<?php
session_start();
include("../../koneksi/index.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$update = "UPDATE siswa 
SET  
    nama='" . $nama . "',
    alamat='" . $alamat . "',
    id_kelas='" . $kelas . "',
    jenis_kelamin='" . $jenis_kelamin . "'

    WHERE id = '" . $id . "'
    ";
mysqli_query($conn, $update);

echo "<script>window.location.href = \"../../index.php?r=siswa\" </script>";
