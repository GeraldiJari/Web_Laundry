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

<?php
    $Aquery="select * from admin";
    
    if(isset($_POST['qcari'])){
      $qcari=$_POST['qcari'];
      $Aquery="SELECT * FROM  user 
      where fullname like '%$qcari%'
      or username like '%$qcari%'  ";
        }
        $tampil1=mysqli_query($koneksi, $Aquery) or die(mysqli_error());
    ?>


<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../image/Logo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
            <div class="inner">
                <?php $tampil3=mysqli_query($koneksi, "select * from admin order by user_id desc");
                        $user=mysqli_num_rows($tampil3);
                ?>
                <h3>
                    <?php echo "$user"; ?>
                </h3>
                <p>Admin</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="?page=Admin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php $tampil3=mysqli_query($koneksi, "select * from jadwal_karyawan order by id_karyawan desc");
                        $user=mysqli_num_rows($tampil3);
                ?>
                <h3>
                    <?php echo "$user"; ?>
                </h3>
                <p>Karyawan</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="?page=Karyawan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php $tampil3=mysqli_query($koneksi, "select * from produk order by id_produk desc");
                        $user=mysqli_num_rows($tampil3);
                ?>
                <h3>
                    <?php echo "$user"; ?>
                </h3>
                <p>Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="?page=Produk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php $tampil3=mysqli_query($koneksi, "select * from kontak order by id desc");
                        $user=mysqli_num_rows($tampil3);
                ?>
                <h3>
                    <?php echo "$user"; ?>
                </h3>
                <p>Pesan Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="?page=Inbox" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jadwal Karyawan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
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
            </div>
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Administrator</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <thead> 
                    <tr>
                        <th><center>No </center></th>
                        <th><center>Username </center></th>
                        <th><center>Fullname</i></center></th>
                        <th><center>Nomor HP</center></th>
                        <th><center>Tools</center></th>
                    </tr>
                </thead>
                <?php 
                    $no=0;
                    while($data=mysqli_fetch_array($tampil1))
                    { $no++; ?>
                    <tbody>
                    <tr>
                    <td><center><?php echo $no; ?></center></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['fullname'];?></td>
                    <td><?php echo $data['hp'];?></td>
                    <?php   
                      }
                    ?>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->  
              </div>
            </div>
                          
    <!-- /.content -->
  </div>
  