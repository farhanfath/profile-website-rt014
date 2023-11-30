<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$nik = $_GET['nik'];
$jk = $_GET['jk'];
$query = mysqli_query($koneksi,"INSERT INTO tb_warga (id,nama,nik,jk) VALUES('','$nama','$nik','$jk')");
header('location: ../index.php?page=data-warga');
?>