<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Yan Mart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <?php include "dashboard.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Layanan</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="image/slide4.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        

        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Detail Product</h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class=""><a href="#service-one" data-toggle="tab">Alat Elektronik</a>
                    </li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    
                    <div class="tab-pane fade active in" id="service-one">
                        <h4>Alat Elektronik</h4>
                        <p>Kami menyediakan berbagai macam Alat elektronik seperti<br>
                            - Lampu<br>
                            - Baterai<br>
                            - dan lain-lain</p>   
                            <?php include "conn.php"; ?>
                        <?php $query1="select img, info_produk, kategori from produk where kategori='Listrik'";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                    <?php 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <h2><img class="img" width="250px" height="250px" src="admin/<?php echo $data['img']; ?>"/></h2>
                </div>
            </div>
             <?php   
              } 
              ?>               
                    </div>
                </div>

            </div>
        </div>

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

        <hr>

        <!-- Footer -->
        <?php include "footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
