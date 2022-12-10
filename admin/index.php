<?php 
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keyword" content="Klinik Gigi Putih Bersih">
  <meta name="description" content="Merupakan sebuah Klinik yang menyediakan beragam pelayanan kesehatan gigi">
  <meta name="author" content="Mahisa Taruna 161100008">

  <title>Klinik Gigi Putih Bersih</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shorcut icon" href="../assets/img/logo-puskesmas.png">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.css" rel="stylesheet">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
    include '../templates/sidebar.php';
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        include ('../templates/topbar.php');
        ?>

        <div class="container-fluid">

         <!-- Breadcrumb -->
         <nav aria-label="breadcrumb" class="main-breadcrumb">
          <ol class="breadcrumb bg-white shadow mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
          </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Main content -->

        <!-- Content Row -->
        <div class="row">
          <div class="col-xl-3 col-md-6 mb-4">
            <?php
            include '../config/koneksi.php';
            $data_dokter = mysqli_query($koneksi, "SELECT * FROM user WHERE role_id=2");
            $jumlah_dkt = mysqli_num_rows($data_dokter);
            ?>
            <div class="card bg-gradient-primary shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Data Dokter</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlah_dkt; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <?php
            include '../config/koneksi.php';
            $data_pasien = mysqli_query($koneksi, "SELECT * FROM user WHERE role_id=3");
            $jumlah_psn = mysqli_num_rows($data_pasien);
            ?> 
            <div class="card bg-gradient-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Data Pasien</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlah_psn ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <?php
            include '../config/koneksi.php';
            $data_obt = mysqli_query($koneksi, "SELECT * FROM obat");
            $jumlah_obt = mysqli_num_rows($data_obt);
            ?>
            <div class="card bg-gradient-warning shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Data Obat</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlah_obt ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-4">
            <?php
            include '../config/koneksi.php';
            $data_lyn = mysqli_query($koneksi, "SELECT * FROM obat");
            $jumlah_lyn = mysqli_num_rows($data_lyn);
            ?>
            <div class="card bg-gradient-dark shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Layanan</div>
                    <div class="h5 mb-0 font-weight-bold text-white"><?= $jumlah_lyn; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Pasien</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body" style="height: 350px;">
                <div class="chart-pie pt-4">
                  <canvas id="myPieChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Pengobatan</h6>
              </div>
              <div class="card-body" style="height: 350px;">
                <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->


      </div>
    </div>
    <!-- Footer -->
    <?php
    include '../templates/footer.php';
    ?>

