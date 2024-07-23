<?php

if(isset($_POST['input'])){
$namafolder="../gambar_product/"; //tempat menyimpan file

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
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);		
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql="INSERT INTO produk(id_produk,img,nama_produk,info_produk,kategori,harga) VALUES
            ('$id_produk','$img','$nama_produk','$info_produk','$kategori','$harga')";
			$res=mysqli_query($koneksi, $sql) or die (mysqli_error());
			echo "Gambar berhasil dikirim ke direktori".$gambar;
            echo "<script>alert('Data Member berhasil dimasukan!'); window.location = 'member.php'</script>";	   
		} else {
		   echo "<p>Gambar gagal dikirim</p>";
		}
   } else {
		echo'<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jenis gambar yang anda kirim salah. Harus .jpg .gif .jpeg !</div>';
   }
} else {
	echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Anda Belum Memilih Gambar.!</div>';
}
}
			?>