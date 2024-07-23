<?php 
  switch (@$_GET['page']) {

		// Admin
		case 'Admin':
			include 'page/admin/admin.php';
			break;
		case 'TambahAdmin':
			include 'page/admin/input-admin.php';
			break;
		case 'EditAdmin':
			include 'page/admin/edit-admin.php';
			break;
		case 'InsertAdmin':
			include 'page/admin/insert-admin.php';
			break;
		case 'HapusAdmin':
			include 'page/admin/hapus-admin.php';
			break;
		case 'UpdateAdmin':
			include 'page/admin/update-admin.php';
			break;

		// Produk
		case 'Produk':
			include 'page/produk/produk.php';
			break;
		case 'InputProduk':
			include 'page/produk/input-produk.php';
			break;
		case 'HapusProduk':
			include 'page/produk/delete-produk.php';
			break;
		case 'HapusAdmin':
			include 'page/admin/hapus-admin.php';
			break;
		case 'UpdateAdmin':
			include 'page/admin/update-admin.php';
			break;

		// Gallery
		case 'Gallery':
			include 'page/gallery/gallery.php';
			break;
		case 'TambahGallery':
			include 'page/gallery/input-gallery.php';
			break;
		case 'EditKaryawan':
			include 'page/karyawan/editkaryawan.php';
			break;
		case 'PengaturanKaryawan':
			include 'page/karyawan/pengaturankaryawan.php';
			break;
		case 'HapusGallery':
			include 'page/gallery/hapus-gallery.php';
			break;

		// Karyawan
		case 'Karyawan':
			include 'page/karyawan/jadwal_karyawan.php';
			break;
		case 'TambahKaryawan':
			include 'page/karyawan/input_karyawan.php';
			break;
		case 'EditTransaksi':
			include 'page/transaksi/edittransaksi.php';
			break;
		case 'HapusTransaksi':
			include 'page/transaksi/hapustransaksi.php';
			break;			

		// User
		case 'Inbox':
			include 'page/pesanmasuk.php';
			break;
		case 'UbahPassword':
			include 'page/user/ubahpassword.php';
			break;
		

		// Pesanan
		case 'Pesan':
			include 'page/invoice/pesanan.php';
			break;

    default :
      include 'page/dashboard.php';
      break;
  }
?>