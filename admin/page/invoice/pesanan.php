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
<!-- START: Content -->
<div class="container">

  <div class="card mt-4 mb-4">
    <div class="card-header">
      <h5>Pesanan</h5>
    </div>
    <div class="card-body">
      <table id="dataTables" class="table table-hover">
        <thead>
          <tr>
            <th>No</th>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Harga Per Kilo</th>
            <th>Deskripsi Paket</th>
            <th>#</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php $paket = viewAllData("tbl_paket"); ?>
          <?php foreach($paket as $data) : ?>
          <tr>
            <td><?= $no++;?></td>
            <td><?= $data['id']; ?></td>
            <td><?= $data['paket']; ?></td>
            <td><?= $data['harga_kilo']; ?></td>
            <td><?= $data['deskripsi']; ?></td>
            <td>
              <a href="?page=EditPaket&id=<?php echo $data['id']; ?>">
                <span class="fas fa-edit"></span>
              </a>
              &nbsp;&nbsp;
              <?php 
                $id = $data['id'];
                $result = viewDatas("SELECT * FROM `tbl_transaksi` WHERE tbl_transaksi.kd_paket = '$id'");
                if ( count($result) > 0 ) { ?>
                <a href="#"
                  onclick="return confirm('Data sedang digunakan');">
                  <span class="fas fa-trash"></span>
              <?php } else { ?>
                <a href="?page=HapusPaket&id=<?php echo $data['id']; ?>"
                  onclick="return confirm('Yakin ingin hapus <?= $data['paket']; ?>');">
                  <span class="fas fa-trash"></span>              
              <?php } ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<!-- END: Content -->