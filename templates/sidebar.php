<?php
include '../config/koneksi.php';
?>

<!-- Sidebar -->
    <ul class="navbar-nav bg-gray-900 sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Mulai Sidebar Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img class="img-profile rounded-circle" width="45px" src="http://localhost/ujian-labor/assets/img/logo-puskesmas.png">
        </div>
        <div class="sidebar-brand-text mx-1">
          <span>KLINIK GIGI PUTIH BERSIH</span>
        </div>
      </a>
      <!-- End Sidebar Brand -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <br>
      <!-- Nav Item - Dashboard -->
      <div class="sidebar-heading">
        ADMIN
      </div>
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/ujian-labor/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Beranda</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          DATA DATA PASIEN
        </div>


        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Pasien</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="../pasien">Daftar Pasien</a>
              <a class="collapse-item" href="">Daftar Obat Pasien</a>
            </div>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Dokter</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="../dokter">Data Dokter</a>
              <a class="collapse-item" href="">Spesialis</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseApoteker" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Apoteker</span>
          </a>
          <div id="collapseApoteker" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="../apoteker">Daftar Apoteker</a>
            </div>
          </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Layanan & Obat
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        

        
        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="../layanan">
            <i class="fas fa-fw fa-ambulance"></i>
            <span>Layanan</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../obat">
            <i class="fas fa-fw fa-briefcase-medical"></i>
            <span>Obat</span>
          </a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="../resep">
            <i class="fas fa-fw fa-book-medical"></i>
            <span>Resep</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../pembayaran">
            <i class="fas fa-fw fa-book-medical"></i>
            <span>Pembayaran</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>