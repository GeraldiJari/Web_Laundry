<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
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


$namafolder="gambar_product/"; //tempat menyimpan file
include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"]))
{
	    $jenis_gambar=$_FILES['nama_file']['type'];
      $id_produk	 = $_POST['id_produk'];
      $nama_produk = $_POST['nama_produk'];
      $info_produk = $_POST['info_produk'];
      $kategori    = $_POST['kategori'];
      $harga   	 = $_POST['harga'];

	if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
	{			
		$img = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $img)) {
			$sql="INSERT INTO produk(id_produk,img,nama_produk,info_produk,kategori,harga) VALUES
            ('$id_produk','$img','$nama_produk','$info_produk','$kategori','$harga')";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			echo "Gambar berhasil dikirim ke direktori".$img;
      echo "<h3><a href='input-product.php'> Input Lagi</a></h3>";   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo'<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jenis gambar yang anda kirim salah. Harus .jpg .gif .jpeg !</div>';
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
                        <h3 class="panel-title"><i class="fa fa-user"></i> Input Produk Sembako</h3> 
                        </div>
                        <div class="panel-body">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Produk</label>
                              <div class="col-sm-3">
                                  <input name="id_produk" type="text" id="id_produk" class="form-control" autocomplete="off" placeholder="Auto Number Tidak perlu di isi" readonly="readonly"/>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Produk</label>
                              <div class="col-sm-3">
                            <input name="nama_produk" type="text" id="nama_produk" class="form-control" autocomplete="off" placeholder="Nama Produk" autocomplete="off" required />                
                            </div>
                          </div>
                          <div class="form-group">
                          <label class="col-sm-2">Pilih Kategori Produk
                          <select name="kategori" id="kategori">
                            <option value="Sembako">Sembako</option>
                            <option value="Listrik">Alat Elektronik</option>
                            <option value="KeperluanRT">Keperluan Rumah Tangga</option>
                            <option value="Obat">Obat Obatan</option>
                            </label>
                          </select>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Harga</label>
                              <div class="col-sm-3">
                            <input name="harga" type="text" id="harga" class="form-control" autocomplete="off" placeholder="Harga" autocomplete="off" required />
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Informasi Gambar</label>
                              <div class="col-sm-8">
                            <input name="info_produk" type="text" id="info_produk" class="form-control" autocomplete="off" placeholder="Informasi Gambar" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Foto</label>
                              <div class="col-sm-3">
                            <input name="nama_file" type="file" id="nama_file" class="form-control" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
	                              <a href="?page=Produk" class="btn btn-sm btn-danger">Batal </a>
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
