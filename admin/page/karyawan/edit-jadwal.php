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
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Admin
                        <small>Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
                        <li class="active">Edit Admin</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <?php
            $query = mysqli_query($koneksi, "SELECT * FROM jadwal_karyawan WHERE id_karyawan='$_GET[kd]'");
            $data  = mysqli_fetch_array($query);
            ?>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i>Edit Data Admin </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="?page=UpdateKaryawan" method="post" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User ID</label>
                              <div class="col-sm-10">
                                  <input name="id_karyawan" type="text" id="id_karyawan" class="form-control" value="<?php echo $data['id_karyawan'];?>" readonly="readonly" autofocus="on" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input name="nama_karyawan" type="text" id="nama_karyawan" class="form-control" value="<?php echo $data['nama_karyawan'];?>" required />
                                  <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                              </div>
                          </div>
                           <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pekerjaan</label>
                              <div class="col-sm-10">
                                  <input name="pekerjaan" class="form-control" id="pekerjaan" type="text" value="<?php echo $data['pekerjaan'];?>" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Waktu</label>
                              <div class="col-sm-10">
                                  <input name="waktu" class="form-control" id="waktu" type="datetime-local" required />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;
	                              <a href="admin.php" class="btn btn-sm btn-danger">Batal </a>
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
