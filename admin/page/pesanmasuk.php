<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inbox</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Pesan Masuk
                        <small>User</small>
                    </h1>
                    <?php
                    if(isset($_GET['hal']) == 'hapus'){
                       $id_karyawan = $_GET['id'];
                       $cek = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id='$id'");
                       if(mysqli_num_rows($cek) == 0){
                           echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
                       }else{
                           $delete = mysqli_query($koneksi, "DELETE FROM kontak WHERE id='$id'");
                           if($delete){
                               echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
                           }else{
                               echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
                           }
                       }
                   }
                   ?>

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>
                        <li class="active">kontak masuk</li>
                    </ol>

                </section>
                   <div class="row">
                        <div class="col-lg-4">
                        <form action='produk.php' method="POST">
                            <input type='text' class="form-control" style="margin-bottom: 4px;" name='qcari' placeholder='Cari Produk' required /> 
                            <input type='submit' value='Cari Data' class="btn btn-sm btn-primary" /> <a href='produk.php' class="btn btn-sm btn-success" >Refresh</i></a>
                            </div>
                                </div>
                            <!-- /.row -->
                            <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><i class="fa fa-user"></i> pesan masuk </h3> 
                                            </div>
                                            <div class="panel-body">
                                        <!-- <div class="table-responsive"> -->
                                <?php
                                $query1="select * from kontak";
                                if(isset($_POST['qcari'])){
                                    $qcari=$_POST['qcari'];
                                    $query1="SELECT * FROM kontak
                                    where id like '%$qcari%'
                                    or name like '%$qcari%'  ";
                                     }
                                     $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                                ?>
                                <table id="example" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th><center>Id</center></th>
                                        <th><center>Nama</i></center></th>
                                        <th><center>Phone</center></th>
                                        <th><center>email</center></th>
                                        <th><center>message</center></th>
                                    </tr>
                                </thead>
                                <?php 
                                    $no=0;
                                    while($data=mysqli_fetch_array($tampil))
                                    { $no++; ?>
                                    <tbody>
                                    <tr>
                                    <td><center><?php echo $data['id'];?></center></td>
                                    <td><?php echo $data['name'];?></td>
                                    <td><?php echo $data['phone'];?></td>
                                    <td><?php echo $data['email'];?></td>
                                    <td><?php echo $data['message'];?></td>

                                        <?php   
                                    }?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
        
    </body>
</html>
