<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yan Mart | Kebumen">
    <meta name="author" content="Adnan Kurniawan_capps">

    <title>Yan Mart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <?php include "dashboard.php"; ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('image/tengah.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Toko kelontong</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('admin/gambar_gallery/R_Periksa.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Cek kesehatan</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Yan Mart Kebumen :
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><i class=""></i> Toko kelontong </h4>
                    </div>
                    <div class="panel-body">
                        <p>Kami menyediakan sembako rumah tangga dan kebutuhan sehari-hari</p>
                        <a href="layanan.php" class="btn btn-danger">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4><i class=""></i> Cek kesehatan</h4>
                    </div>
                    <div class="panel-body">
                        <p>Kami menyediakakn layanan cek tensi dan cek kesehatan kepada masyarakat yang membutuhkan.</p>
                        <a href="layanan.php" class="btn btn-info">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Project yang kami sediakan</h2>
            </div>
            <div class="col-md-6">
                <p>Kami menyediakan produk sembako rumah tangga dan cek kesehatan diantaranya:</p>
                <ul>
                    <li>Beras</li>
                    <li>mie instant</li>
                    <li>minyak goreng</li>
                    <li>Gula pasir/jawa</li>
                    <li>tepung terigu</li>
                    <li>alat-alat rumah tangga</li>
                    <li>cek tensi</li>
                </ul>
                <p>Kami selalu memberikan kepuasan kepada pelanggan baik dari pelayanan dan kualitas barang.</p></div>
            <div class="col-md-6">
                <img class="img-responsive" src="image/slide4.jpg" alt="">
                <img class="img-responsive" src="image/slide4.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
       <?php include "footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
