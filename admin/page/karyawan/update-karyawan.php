<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Simple Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

                <!-- Main content -->
                <section class="content">
<?php
include "../conn.php";
$id_karyawan       = $_POST['id_karyawan'];
$nama_karyawan      = $_POST['nama_karyawan'];
$pekerjaan      = $_POST['pekerjaan'];
$waktu      = $_POST['waktu'];

$query = mysqli_query($koneksi, "UPDATE jadwal_karyawan SET id_karyawan='$id_karyawan', nama_karyawan='$nama_karyawan', pekerjaan='$pekerjaan', waktu='$waktu' WHERE id_karyawan='$id_karyawan'")or die(mysql_error());
if ($query){
    echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Produk Berhasil Di Simpan.</div>';
    echo "<h3><a href='?page=Karyawan'>Kembali</a></h3>";
} else {
	echo "gagal";
    }
?>