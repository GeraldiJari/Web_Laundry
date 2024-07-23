<?php
include "../conn.php";
$id_gallery = $_GET['kd'];

$query = mysqli_query($koneksi, "DELETE FROM gallery WHERE id_gallery='$id_gallery'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'gallery.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'gallery.php'</script>";	
}
?>