<?php include "session.php"; ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo $_SESSION['gambar']; ?>" class="img-circle" alt="User Image" style="border: 2px solid #3C8DBC;" />
                        </div>
                        <div class="pull-left info">
                            <p>Selamat Datang,<br /><?php echo $_SESSION['fullname']; ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <?php include "menu.php"; ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Testimoni
                        <small>Administrator</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Testimoni</a></li>
                        <li class="active">Edit Testimoni</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <?php
            $kd = $_GET['kd_cus'];
			$sql = mysqli_query($koneksi, "SELECT * FROM testimoni WHERE id_testi='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: testimoni.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
            
			if(isset($_POST['update'])){
                $id_testi	= $_POST['id_testi'];
				$id_member	= $_POST['id_member'];
				$komentar   = $_POST['komentar'];
				$rating 	= $_POST['rating'];
				
				$update = mysqli_query($koneksi, "UPDATE testimoni SET id_member='$id_member', komentar='$komentar', rating='$rating' WHERE id_testi='$id_testi'") or die(mysqli_error());
				if($update){
					echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			?>
           <!-- /.row -->
                    <br />
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-success">
                        <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-user"></i> Edit Data Testimoni </h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Testimoni</label>
                              <div class="col-sm-3">
                                  <input name="id_testi" type="text" id="id_testi" class="form-control" value="<?php echo $row['id_testi']; ?>" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Member</label>
                              <div class="col-sm-3">
                              <input type="text" id="id_member" name="id_member" class="form-control" value="<?php echo $row['id_member']; ?>" readonly="readonly" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Komentar</label>
                              <div class="col-sm-3">
                              <textarea cols="60" rows="5" name="komentar" id="komentar" >
                              <?php echo $row['komentar']; ?>
                              </textarea>
                            <!-- <input name="komentar" type="text" id="komentar" class="form-control" autocomplete="off" placeholder="Alamat" autocomplete="off" required />
                              -->
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Rating</label>
                              <div class="col-sm-3">
                            <select name="rating" id="rating" class="form-control" required>
							<option value=""> -- Pilih Rating -- </option>
							<option value="1">1 Star</option>
							<option value="2">2 Star</option>
                            <option value="3">3 Star</option>
							<option value="4">4 Star</option>
                            <option value="5">5 Star</option>
						    </select>
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Rating Sebelumnya</label>
                              <div class="col-sm-3">
                              <?php
                            if($row['rating'] == '1'){
								echo '<span class="glyphicon glyphicon-star"></span>';
							}
                            else if ($row['rating'] == '2' ){
								echo '<span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span>';
							}
                            else if ($row['rating'] == '3' ){
								echo '<span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span>';
							}
                            else if ($row['rating'] == '4' ){
								echo '<span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span>';
							}
                            else if ($row['rating'] == '5' ){
								echo '<span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span> <span class="glyphicon glyphicon-star"></span>';
							}
                    
                    ?>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="testimoni.php" class="btn btn-sm btn-danger">Batal </a>
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
