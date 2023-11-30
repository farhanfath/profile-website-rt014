<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$nik = $_GET['nik'];
$jk = $_GET['jk'];
$query = mysqli_query($koneksi,"UPDATE tb_warga SET nama='$nama',nik='$nik',jk='$jk' WHERE id='$id'");
header('location: ../index.php?page=data-warga');
?>