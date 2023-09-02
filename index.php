<?php
include('layout/header.php');
if(isset($_SESSION['email'])){
    // echo $_SESSION['email'];
}else{
    header("location: login.php");
}
if(isset($_GET['r'])){
    switch($_GET['r']){
        case 'siswa':
            include('siswa/index.php');
            break;
        case 'siswa-tambah':
            include('siswa/create.php');
            break;
        case 'siswa-edit':
            include('siswa/update.php');
            break;
        default:
            include('login.php');
    }
}else{
    include('siswa/index.php');
}
include('layout/footer.php');
?>