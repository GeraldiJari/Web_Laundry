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
		if(isset($_POST['input'])){
				$id_karyawan	 = $_POST['id_karyawan'];
				$nama_karyawan = $_POST['nama_karyawan'];
        $pekerjaan = $_POST['pekerjaan'];
				$waktu        = $_POST['waktu'];
				
				$cek = mysqli_query($koneksi, "SELECT * FROM jadwal_karyawan WHERE id_karyawan='$id_karyawan'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO jadwal_karyawan(id_karyawan, nama_karyawan, pekerjaan, waktu)
															VALUES('$id_karyawan','$nama_karyawan','$pekerjaan','$waktu')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data Produk Berhasil Di Simpan.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Ups, Data Produk Gagal Di simpan !</div>';
						}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Produk Sudah Ada..!</div>';
				}
			}

			?>
                <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                        <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title"><i class="fa fa-user"></i> Input Karyawan </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="?page=TambahKaryawan" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Karyawan</label>
                              <div class="col-sm-10">
                                  <input name="id_karyawan" type="text" id="id_karyawan" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Karyawan</label>
                              <div class="col-sm-10">
                            <input name="nama_karyawan" type="text" id="nama_karyawan" class="form-control" autocomplete="off" placeholder="Nama Produk" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Unit</label>
                              <div class="col-sm-10">
                            <input name="pekerjaan" type="text" id="pekerjaan" class="form-control" autocomplete="off" placeholder="Unit Produk" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-10">
                            <input name="waktu" type="datetime-local" id="waktu" class="form-control" autocomplete="off" placeholder="Harga" autocomplete="off" required />
                            </div>
                          </div>
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="produk.php" class="btn btn-sm btn-danger">Batal </a>
                              </div>
                          </div>
                      </form>
                  </div>
                  </div>
                  </div>
          		</div><!-- col-lg-12--> 
                    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
    </body>
</html>
