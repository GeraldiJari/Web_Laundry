<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product</h1>
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
<!-- START: Content -->
<div class="container">

  <div class="card mt-4">
    <div class="card-header">
      <h5>Produk</h5>
    </div>
    <div class="card-body">
      <table id="dataTables" class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama Produk</th>
            <th>Informasi Produk</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php $karyawan = viewDatas("SELECT * FROM produk"); ?>
          <?php foreach($karyawan as $data) : ?>
          <tr>
            <td><?= $no++;?></td>
            <td><img class="img" width="70px" height="70px" src="<?= $data['img']; ?>"></td>
            <td><?= $data['nama_produk']; ?></td>
            <td><?= $data['info_produk']; ?></td>
            <td>
                <a href="?page=EditProduk&kd=<?php echo $data['id_produk']; ?>">
                <span class="fas fa-edit"></span>
                <a href="?page=HapusProduk&kd=<?php echo $data['id_produk']; ?>"
                onclick="return confirm('Yakin ingin hapus <?= $data['nama_produk']; ?>');">
                <span class="fas fa-trash"></span>
              <td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
  
</div>
<!-- END: Content -->