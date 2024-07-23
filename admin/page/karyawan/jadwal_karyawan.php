<?php
    if(isset($_GET['hal']) == 'hapus'){
        $id_karyawan = $_GET['id'];
        $cek = mysqli_query($koneksi, "SELECT * FROM jadwal_karyawan WHERE id_karyawan='$id_karyawan'");
        if(mysqli_num_rows($cek) == 0){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
        }else{
            $delete = mysqli_query($koneksi, "DELETE FROM jadwal_karyawan WHERE id_karyawan='$id_karyawan'");
            if($delete){
                echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
            }
        }
    }
?>
<?php
    $query1="select * from jadwal_karyawan";
    if(isset($_POST['qcari'])){
        $qcari=$_POST['qcari'];
        $query1="SELECT * FROM karyawan
        where id_karyawan like '%$qcari%'
        or nama_karyawan like '%$qcari%'  ";
            }
            $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jadwal Karyawan</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                <thead> 
                    <tr>
                        <th><center>No </center></th>
                        <th><center>Id </center></th>
                        <th><center>Nama</i></center></th>
                        <th><center>Jenis Pekerjaan</center></th>
                        <th><center>Waktu Kerja</center></th>
                        <th><center>Tools</center></th>
                    </tr>
                </thead>
                <?php 
                    $no=0;
                    while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $no; ?></center></td>
                    <td><center><?php echo $data['id_karyawan'];?></center></td>
                    <td><?php echo $data['nama_karyawan'];?></td>
                    <td><?php echo $data['pekerjaan'];?></td>
                    <td><?php echo $data['waktu'];?></td>
                    <td><center><div id="thanks"><a class="btn btn-sm btn-primary" data-placement="bottom" data-toggle="tooltip" title="Edit Produk" href="edit-karyawan.php?hal=edit&kd_cus=<?php echo $data['id_karyawan'];?>"><span class="glyphicon glyphicon-edit"></span></a>  
                    <a onclick="return confirm ('Yakin hapus <?php echo $data['nama_karyawan'];?>.?');" class="btn btn-sm btn-danger tooltips" data-placement="bottom" data-toggle="tooltip" title="Hapus Produk" href="karyawan.php?hal=hapus&kd=<?php echo $data['id_karyawan'];?>"><span class="glyphicon glyphicon-trash"></a></center></td></tr></div>
                        <?php   
                    }?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="text-right">
                                    <a href="?page=InputKaryawan" class="btn btn-sm btn-warning">Input Karyawan <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
            
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
