<?php 
  include "../koneksi.php";

  // Jumlah Surat Masuk
  $q_jml_surat_masuk = "SELECT COUNT(*) AS jml_surat_masuk FROM `tb_surat_masuk`"; 
  $sql_jml_surat_masuk = mysqli_query($koneksi, $q_jml_surat_masuk);
  $data_surat_masuk = mysqli_fetch_array($sql_jml_surat_masuk);

  // Jumlah Surat Belum Di Baca
  $q_jml_blm_baca = "SELECT COUNT(*) AS jml_blm_baca FROM `tb_surat_masuk` WHERE `status_disposisi` = '0'"; 
  $sql_jml_blm_baca = mysqli_query($koneksi, $q_jml_blm_baca);
  $data_blm_baca = mysqli_fetch_array($sql_jml_blm_baca);

  // Jumlah Surat Keluar
  $q_jml_surat_keluar = "SELECT COUNT(*) AS jml_surat_keluar FROM `tb_surat_keluar`"; 
  $sql_jml_surat_keluar = mysqli_query($koneksi, $q_jml_surat_keluar);
  $data_surat_keluar = mysqli_fetch_array($sql_jml_surat_keluar);


  
 ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $data_surat_masuk['jml_surat_masuk']; ?></h3>

              <p>Jumlah Semua <br>Surat Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-inbox"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $data_blm_baca['jml_blm_baca']; ?></h3>

              <p>Surat Masuk <br>Belum Dibaca</p>
            </div>
            <div class="icon">
              <i class="fa fa-exclamation-circle"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $data_surat_keluar['jml_surat_keluar']; ?></h3>

              <p>Jumlah Semua <br> Surat Keluar</p>
            </div>
            <div class="icon">
              <i class="fa fa-paper-plane"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php 
              $tot_semua = $data_surat_masuk['jml_surat_masuk'] + $data_surat_keluar['jml_surat_keluar'];
              echo $tot_semua;
              ?></h3>

              <p>Jumlah <br> Semua Surat</p>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            
          </div>
        </div>

         <div class="col-md-12">
          <div class="box box-primary box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Apa yang anda bisa lakukan ?</h3>

              
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <ol>
               <li>All you can do here</li>
               <li>All you want, can do here</li>
             </ol>
            </div>
            <!-- /.box-body -->
          </div>

    </section>