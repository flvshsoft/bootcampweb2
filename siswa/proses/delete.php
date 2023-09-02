<?php
session_start();
include("../../koneksi/index.php");

$id = $_GET['id'];
$hapus = "DELETE FROM siswa WHERE id = '" . $id . "'";
$q_buat = mysqli_query($conn, $hapus);

echo "<script>window.location.href = \"../../index.php?r=siswa\" </script>";
