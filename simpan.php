<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$kode_boking    = $_POST['kode_boking'];
$nama            = $_POST['nama'];
$no_hp			= $_POST['no_hp'];
$nama_team       = $_POST['nama_team'];
$lapangan        = $_POST['lapangan'];
$tgl_sewa		= $_POST['tgl_sewa'];
$jam_masuk       = $_POST['jam_masuk'];
$jam_keluar        = $_POST['jam_keluar'];
$bayar          = $_POST['bayar'];
// query SQL untuk insert data
$query="INSERT INTO sewa SET kode_boking='$kode_boking',nama='$nama',no_hp='$no_hp',nama_team='$nama_team',lapangan='$lapangan',tgl_sewa='$tgl_sewa',jam_masuk='$jam_masuk',jam_keluar='$jam_keluar',bayar='$bayar'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>