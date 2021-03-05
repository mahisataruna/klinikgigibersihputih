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

  <title>Data Pasien - Klinik Gigi Putih Bersih</title>

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

    <!-- Sidebar -->
    <?php
    include ('../templates/sidebar.php');
    ?>    
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php
        include ('../templates/topbar.php');
        ?>
        <!-- End of Topbar -->

        <div class="container-fluid">

         <!-- Breadcrumb -->
         <nav aria-label="breadcrumb" class="main-breadcrumb">
          <ol class="breadcrumb bg-white shadow mb-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="index.php">Beranda</a></li>
          </ol>
        </nav>
        <!-- /Breadcrumb -->

        <!-- Mulai Card 1 -->
        <div class="row gutters-sm">
          <div class="col-sm">
            <div class="card bg-white shadow mb-4">
              <a href="#collapseCardAnggota" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <!-- Judul Konten -->
                <h6 class="m-0 font-weight-bold text-primary">DATA PASIEN</h6>
              </a>

              <!-- Card Content - Collapse -->
              <div class="collapse show" id="collapseCardAnggota">
                <div class="col-sm-12 mx-auto">
                  <div class="card-header bg-white">
                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#TambahModal"><i class="fas fa-plus fa-sm"></i></a>
                  </div> 
                  <div class="card-body">
                    <div class="table-responsive table-sm" style="height: 360px;overflow: auto;">
                      <table class="table table-bordered table-hover table-xs" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col-sm" style="text-align: center;">#</th>
                            <th style="text-align: center;">ID Pasien</th>
                            <th style="text-align: center;">Nama Pasien</th>
                            <th style="text-align: center;">Jenis Kelamin</th>
                            <th style="text-align: center;">Umur</th>
                            <th style="text-align: center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $i=1;
                          include '../config/koneksi.php';
                          $data = mysqli_query($koneksi, "SELECT * FROM user WHERE role_id=3");
                          while($dp = mysqli_fetch_array($data)){
                            ?>
                            <tr>
                              <th scope="row" width="3%" style="text-align: center;"><?= $i; ?></th>
                              <td width="5%" style="text-align: center;"><?= $dp['id']; ?></td>
                              <td width="20%"><?= $dp['name']; ?></td>
                              <td width="20%" style="text-align: center;">
                                <?php
                                if($dp['jenis_kelamin'] == 'L')
                                {
                                  echo "<span>Laki-laki</span>";
                                } elseif ($dp['jenis_kelamin']== 'P'){
                                  echo "<span>Perempuan</span>";
                                }
                                ?>
                              </td>
                              <td width="20%" style="text-align: center;"><?= $dp['umur']; ?></td>
                              <td width="5" style="text-align: center;">
                                <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#EditModal<?= $dp['id']; ?>"><i class="fas fa-edit fa-sm"></i></a>
                                <a href="delete.php?id=<?php echo $dp['id'];?>"  onclick="return confirm('Apakah anda yakin ingin menghapus pasien ini?')" class="btn btn-sm btn-danger"><i class="fas fa-trash fa-sm"></i></a>
                              </td>
                            </tr>
                            <?php $i++;?>
                          <?php } ?>
                        </tbody>
                      </table>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End card simpanan Koperasi -->


      </div>
    </div>



    <!--  tambah modal -->
    <div class="modal fade" id="TambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pasien</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form action="tambah.php" method="post">
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Pasien">
              </div>
              <div class="form-group">
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Berobat">
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <select name="jenis_kelamin" id="jenis_transaksi" name="jenis_kelamin" class="form-control">
                      <option>Jenis Kelamin</option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur Pasien">
                    <input type="hidden" id="role_id" name="role_id" value="3">
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- EDIT -->

    <!--  tambah modal -->

    <?php
    $i=1;
    include '../config/koneksi.php';
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE role_id=3");
    while($dp = mysqli_fetch_array($data)){
      ?>
      <div class="modal fade" id="EditModal<?= $dp['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Pasien</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <form action="edit.php" method="post">
              <div class="modal-body">
                <input type="hidden" id="id" name="id" value="<?= $dp['id']; ?>">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" value="<?= $dp['name'] ?>">
                </div>
                <div class="form-group">
                  <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $dp['tanggal'] ?>">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= $dp['jenis_kelamin'] ?>">
                        <option>Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="umur" name="umur" value="<?= $dp['umur'] ?>">
                      <input type="hidden" id="role_id" name="role_id" value="3">
                    </div>
                  </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <?php $i++;?>
    <?php } ?>


    <!-- FOOTER-->

    <?php
    include '../templates/footer.php';
    ?>
