<?php include "conn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yan mart">
    <meta name="author" content="Yan mart">

    <title>Yan mart</title>

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

        <!-- Team Members -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Testimoni</h2>
            </div>
            <?php $query1="select gambar, info_gb from gallery";
                    $tampil=mysqli_query($koneksi, $query1) or die(mysqli_error());
                    ?>
                    <?php 
                     $no=0;
                     while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <h2><img class="img" width="250px" height="250px" src="admin/<?php echo $data['gambar']; ?>"/></h2>
                    <h3><?php echo $data['info_gb']; ?></h3>
                </div>
            </div>
             <?php   
              } 
              ?>
        </div>
        <!-- /.row -->

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
