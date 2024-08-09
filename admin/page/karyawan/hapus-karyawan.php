<?php
include "../conn.php";
$id_karyawan = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM jadwal_karyawan WHERE id_karyawan='$id_karyawan'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'gallery.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'gallery.php'</script>";	
}
?>