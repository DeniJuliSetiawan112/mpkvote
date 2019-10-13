<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Devote</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/dist/css/adminlte.min.css">
  <link rel="shortcut icon" href="<?php echo base_url()?>public/img/logo/smk.jpg">
  
  <script src="<?= base_url() ?>public/admin/plugins/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>public/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="<?= base_url() ?>public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="<?= base_url() ?>public/admin/dist/js/adminlte.js"></script>
  <script src="<?= base_url() ?>public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/admin/plugins/dt/datatables-bs4/css/dataTables.bootstrap4.css">

  <style type="text/css">
    .cardlink{
      color: black;
    }
    .cardlink:hover{
      color: blue;
    } 
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="<?= base_url() ?>index.php/Login/logout " class="nav-link" href="#" style="color: red;" title="Keluar">
          <i class="fas fa-sign-out-alt fa-2x"></i>
        </a>
      </li>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="<?= base_url() ?>public\img\logo\smk.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Devote</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a class="nav-link <?php if ($this->uri->segment(2)=='') {
                echo 'active';
              } ?>" href="<?php echo site_url('admin'); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview <?php if ($this->uri->segment(2)=='diagram_ketua'){echo 'menu-open';}
                                            elseif($this->uri->segment(2)=='diagram_wakil'){echo 'menu-open';}?>">
            <a href="#" class="nav-link <?php if ($this->uri->segment(2)=='diagram_ketua') {
                echo 'active';
              } else if ($this->uri->segment(2)=='diagram_wakil') {
                echo 'active';
              } ?>">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Diagram Calon
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='diagram_ketua') {
                echo 'active';
              } ?>" href="<?php echo site_url('admin/diagram_ketua'); ?>">
                  <i class="far fa-chart-bar nav-icon"></i>
                  <p>Diagram Ketua</p>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ($this->uri->segment(2)=='diagram_wakil') {
                echo 'active';
              } ?>" href="<?php echo site_url('admin/diagram_wakil'); ?>">
                  <i class="fa fa-chart-pie nav-icon"></i>
                  <p>Diagram Wakil</p>
                </a>
              </li>
            </ul>
          </li>
      </nav>
      </div>
  </aside>