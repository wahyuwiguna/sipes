<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPES | Kepala Bidang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../Assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../Assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../Assets/bower_components/Ionicons/css/ionicons.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="../../Assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../Assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../Assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="../../Assets/bower_components/morris.js/morris.css"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="../../Assets/bower_components/jvectormap/jquery-jvectormap.css"> -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="../../Assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../Assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../../Assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../Assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

   
  <!-- modal jquery -->
  <script src="../../Assets/js/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red-light sidebar-mini">
   <?php
    session_start();
    if($_SESSION['status_session']!="login_kepbid"){
        echo "<script>alert('Silakan Login Terlebih dahulu');window.location.href='../index.php'</script>";
    }

    include "../koneksi.php";
    $q_jml_blm_baca = "SELECT COUNT(*) AS jml_blm_baca FROM `tb_surat_masuk` WHERE `status_disposisi` = '0'"; 
    $sql_jml_blm_baca = mysqli_query($koneksi, $q_jml_blm_baca);
    $data_blm_baca = mysqli_fetch_array($sql_jml_blm_baca);
    ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><i class="fa fa-paper-plane" style="font-size: 25px;"></i></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-paper-plane" style="font-size: 25px;"></i> SIPES</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../images/users/3_woman.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama_user']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../images/users/3_woman.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama_user']; ?>
                  <small>Sistem Pengarsipan Surat</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?ref=profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div style="text-align: center;">
          <img src="../images/users/Logo.png" width="150px" height="135px">
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENGELOLA SURAT</li>
        <!-- <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li> -->
        
         
        <li>
          <a href="index.php?ref=data_surat_masuk.php">
            <i class="fa fa-inbox"></i> <span>Data Surat Masuk</span>
            
            <?php 
              if ($data_blm_baca['jml_blm_baca']>0) {
                echo "<small class='label pull-right bg-red'>";
                echo $data_blm_baca['jml_blm_baca'];
                echo "</small>";
              }else{
                
              }
               
            ?>
            
          </a>
        </li>
         <li>
          <a href="index.php?ref=data_surat_keluar.php">
            <i class="fa fa-paper-plane"></i> <span>Data Surat Keluar</span>
          </a>
        </li>
         <li>
          <a href='index.php?ref=laporan_surat.php&tahun=<?php  
             $tahun = date('Y');
             echo $tahun;
            ?>'>
            <i class="fa fa-file-text"></i> <span>Laporan Surat</span>
          </a>
        </li>
         
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     <!-- page content -->
        <?php include("content.php"); ?>
     <!-- /page content -->
  
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>STIKI Indonesia</b>
    </div>
    <strong>Copyright &copy; 2018.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../Assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../Assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Select2 -->
<script src="../../Assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="../../Assets/bower_components/Chart.js/Chart.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../Assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="../../Assets/bower_components/raphael/raphael.min.js"></script>
<script src="../../Assets/bower_components/morris.js/morris.min.js"></script> -->
<!-- Sparkline -->
<!-- <script src="../../Assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> -->
<!-- jvectormap -->
<!-- <script src="../../Assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../../Assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="../../Assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="../../Assets/bower_components/moment/min/moment.min.js"></script>
<script src="../../Assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script> -->
<!-- datepicker -->
<script src="../../Assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../Assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../Assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../Assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../Assets/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="../../Assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../Assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#data_table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  $(function () {
    $('#example1').DataTable()
    $('#surat_masuk_blm').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })

  
</script>
<script>
  $(function () {
    //Date picker Tangal Surat
    $('#tgl_surat').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
    //Date picker Tangal Surat
    $('#tgl_terima').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
    //Date picker Tangal Surat
    $('#tgl_kirim').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    })
    //Initialize Select2 Elements
    $('.select2').select2()
    
  })
  
</script>

</body>
</html>
