<?php 
  include "../koneksi.php";

  $tahun = $_GET['tahun'];


  //Surat Masuk Januari
  $q_sm_jan = "SELECT COUNT(*) AS sm_jan FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='1'"; 
  $sql_sm_jan = mysqli_query($koneksi, $q_sm_jan);
  $data_sm_jan = mysqli_fetch_array($sql_sm_jan);

    //Surat Masuk Februari
  $q_sm_feb = "SELECT COUNT(*) AS sm_feb FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='2'"; 
  $sql_sm_feb = mysqli_query($koneksi, $q_sm_feb);
  $data_sm_feb = mysqli_fetch_array($sql_sm_feb);

  //Surat Masuk Maret
  $q_sm_mar = "SELECT COUNT(*) AS sm_mar FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='3'"; 
  $sql_sm_mar = mysqli_query($koneksi, $q_sm_mar);
  $data_sm_mar = mysqli_fetch_array($sql_sm_mar);

  //Surat Masuk April
  $q_sm_apr = "SELECT COUNT(*) AS sm_apr FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='4'"; 
  $sql_sm_apr = mysqli_query($koneksi, $q_sm_apr);
  $data_sm_apr = mysqli_fetch_array($sql_sm_apr);

    //Surat Masuk Mei
  $q_sm_mei = "SELECT COUNT(*) AS sm_mei FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='5'"; 
  $sql_sm_mei = mysqli_query($koneksi, $q_sm_mei);
  $data_sm_mei = mysqli_fetch_array($sql_sm_mei);

    //Surat Masuk Juni
  $q_sm_jun = "SELECT COUNT(*) AS sm_jun FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='6'"; 
  $sql_sm_jun = mysqli_query($koneksi, $q_sm_jun);
  $data_sm_jun = mysqli_fetch_array($sql_sm_jun);

    //Surat Masuk Juli
  $q_sm_jul = "SELECT COUNT(*) AS sm_jul FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='7'"; 
  $sql_sm_jul = mysqli_query($koneksi, $q_sm_jul);
  $data_sm_jul = mysqli_fetch_array($sql_sm_jul);

    //Surat Masuk Agustus
  $q_sm_agu = "SELECT COUNT(*) AS sm_agu FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='8'"; 
  $sql_sm_agu = mysqli_query($koneksi, $q_sm_agu);
  $data_sm_agu = mysqli_fetch_array($sql_sm_agu);

    //Surat Masuk September
  $q_sm_sep = "SELECT COUNT(*) AS sm_sep FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='9'"; 
  $sql_sm_sep = mysqli_query($koneksi, $q_sm_sep);
  $data_sm_sep = mysqli_fetch_array($sql_sm_sep);

    //Surat Masuk Oktober
  $q_sm_okt = "SELECT COUNT(*) AS sm_okt FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='10'"; 
  $sql_sm_okt = mysqli_query($koneksi, $q_sm_okt);
  $data_sm_okt = mysqli_fetch_array($sql_sm_okt);

    //Surat Masuk November
  $q_sm_nov = "SELECT COUNT(*) AS sm_nov FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='11'"; 
  $sql_sm_nov = mysqli_query($koneksi, $q_sm_nov);
  $data_sm_nov = mysqli_fetch_array($sql_sm_nov);

    //Surat Masuk Desember
  $q_sm_des = "SELECT COUNT(*) AS sm_des FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun AND MONTH(`tgl_terima`)='12'"; 
  $sql_sm_des = mysqli_query($koneksi, $q_sm_des);
  $data_sm_des = mysqli_fetch_array($sql_sm_des);

  //Surat Masuk TOTAL
  $q_sm_tot = "SELECT COUNT(*) AS sm_tot FROM `tb_surat_masuk` WHERE YEAR(`tgl_terima`)=$tahun"; 
  $sql_sm_tot = mysqli_query($koneksi, $q_sm_tot);
  $data_sm_tot = mysqli_fetch_array($sql_sm_tot);



  //Surat Keluar Januari
  $q_sk_jan = "SELECT COUNT(*) AS sk_jan FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='1'"; 
  $sql_sk_jan = mysqli_query($koneksi, $q_sk_jan);
  $data_sk_jan = mysqli_fetch_array($sql_sk_jan);

  //Surat Masuk Februari
  $q_sk_feb = "SELECT COUNT(*) AS sk_feb FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='2'"; 
  $sql_sk_feb = mysqli_query($koneksi, $q_sk_feb);
  $data_sk_feb = mysqli_fetch_array($sql_sk_feb);

  //Surat Keluar Maret
  $q_sk_mar = "SELECT COUNT(*) AS sk_mar FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='3'"; 
  $sql_sk_mar = mysqli_query($koneksi, $q_sk_mar);
  $data_sk_mar = mysqli_fetch_array($sql_sk_mar);

  //Surat Keluar April
  $q_sk_apr = "SELECT COUNT(*) AS sk_apr FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='4'"; 
  $sql_sk_apr = mysqli_query($koneksi, $q_sk_apr);
  $data_sk_apr = mysqli_fetch_array($sql_sk_apr);

    //Surat Keluar Mei
  $q_sk_mei = "SELECT COUNT(*) AS sk_mei FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='5'"; 
  $sql_sk_mei = mysqli_query($koneksi, $q_sk_mei);
  $data_sk_mei = mysqli_fetch_array($sql_sk_mei);

    //Surat Keluar Juni
  $q_sk_jun = "SELECT COUNT(*) AS sk_jun FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='6'"; 
  $sql_sk_jun = mysqli_query($koneksi, $q_sk_jun);
  $data_sk_jun = mysqli_fetch_array($sql_sk_jun);

    //Surat Keluar Juli
  $q_sk_jul = "SELECT COUNT(*) AS sk_jul FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='7'"; 
  $sql_sk_jul = mysqli_query($koneksi, $q_sk_jul);
  $data_sk_jul = mysqli_fetch_array($sql_sk_jul);

    //Surat Keluar Agustus
  $q_sk_agu = "SELECT COUNT(*) AS sk_agu FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='8'"; 
  $sql_sk_agu = mysqli_query($koneksi, $q_sk_agu);
  $data_sk_agu = mysqli_fetch_array($sql_sk_agu);

    //Surat Keluar September
  $q_sk_sep = "SELECT COUNT(*) AS sk_sep FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='9'"; 
  $sql_sk_sep = mysqli_query($koneksi, $q_sk_sep);
  $data_sk_sep = mysqli_fetch_array($sql_sk_sep);

    //Surat Keluar Oktober
  $q_sk_okt = "SELECT COUNT(*) AS sk_okt FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='10'"; 
  $sql_sk_okt = mysqli_query($koneksi, $q_sk_okt);
  $data_sk_okt = mysqli_fetch_array($sql_sk_okt);

    //Surat Keluar November
  $q_sk_nov = "SELECT COUNT(*) AS sk_nov FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='11'"; 
  $sql_sk_nov = mysqli_query($koneksi, $q_sk_nov);
  $data_sk_nov = mysqli_fetch_array($sql_sk_nov);

    //Surat Keluar Desember
  $q_sk_des = "SELECT COUNT(*) AS sk_des FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun AND MONTH(`tgl_kirim`)='12'"; 
  $sql_sk_des = mysqli_query($koneksi, $q_sk_des);
  $data_sk_des = mysqli_fetch_array($sql_sk_des);

    //Surat Keluar TOTAL
  $q_sk_tot = "SELECT COUNT(*) AS sk_tot FROM `tb_surat_keluar` WHERE YEAR(`tgl_kirim`)=$tahun"; 
  $sql_sk_tot = mysqli_query($koneksi, $q_sk_tot);
  $data_sk_tot = mysqli_fetch_array($sql_sk_tot);



 ?>

 <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Laporan Surat
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-12">
          <div class="box box-warning">
            <form class="form-horizontal" method="POST" action="Proses/tampilkan_laporan.php">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-2">
                    <select class="form-control" name="tahun">
                    <?php 
                        $thn_skr = date('Y');
                        for($x = $thn_skr; $x>=2017; $x--){
                          ?>
                            <option value='<?php echo $x; ?>' <?php if ($x == $tahun) { echo "selected"; } ?>><?php echo $x; ?></option>
                        <?php } ?>
                                     
                            </select>
                  </div>
                   <button type="submit" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Tampilkan</button>
                </div>
            </form>
          </div>
        </div>

        <div class="row">
        <div class="col-xs-12">
          
          <!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Grafik Surat Tahun <?php echo "$tahun"; ?></h3>
              <a target="_blank" href="Pages/grafik_print.php?tahun=<?php echo $tahun; ?>" class="btn btn-success pull-right"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak</a>
              
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
              <div>
                Keterangan : &nbsp;&nbsp;
                <small class="label bg-blue">&nbsp;&nbsp;&nbsp;</small>&nbsp;&nbsp;Surat Masuk &nbsp;&nbsp;&nbsp;&nbsp;
                <small class="label bg-red">&nbsp;&nbsp;&nbsp;</small>&nbsp;&nbsp;Surat Keluar
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        </div>
        
        <div class="row">
        <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Statistik Data Surat Tahun <?php echo $tahun; ?></h3>
              <a target="_blank" href="Pages/laporan_surat_print.php?tahun=<?php echo $tahun; ?>" class="btn btn-success pull-right"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 4%; text-align: center;">#</th>
                  <th style="width: 36%; text-align: center;">Bulan</th>
                  <th colspan="2" style="width: 20%; text-align: center;">Surat Masuk</th>
                  <th colspan="2" style="width: 20%; text-align: center;">Surat Keluar</th>
                  <th style="width: 10%; text-align: center;">Jumlah</th>

                </tr>
                <tr>
                  <th style="text-align: center;">1</th>
                  <th>JANUARI</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_jan['sm_jan']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_jan['sm_jan'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_jan['sm_jan'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=1' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_jan['sk_jan']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_jan['sk_jan'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_jan['sk_jan'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=1' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_jan = $data_sm_jan['sm_jan'] + $data_sk_jan['sk_jan'];
                    if ($tot_jan==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_jan;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_jan;
                        echo "</small>";
                      }  
                   ?></th>

                <tr>
                  <th style="text-align: center;">2</th>
                  <th>FEBRUARI</th>
                   <th style="text-align: center;">
                    <?php 
                      if ($data_sm_feb['sm_feb']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_feb['sm_feb'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_feb['sm_feb'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=2' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_feb['sk_feb']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_feb['sk_feb'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_feb['sk_feb'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=2' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_feb = $data_sm_feb['sm_feb'] + $data_sk_feb['sk_feb'];
                    if ($tot_jan==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_feb;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_feb;
                        echo "</small>";
                      }  
                   ?></th>
                  
                </tr>
                <tr>
                  <th style="text-align: center;">3</th>
                  <th>MARET</th>
                   <th style="text-align: center;">
                    <?php 
                      if ($data_sm_mar['sm_mar']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_mar['sm_mar'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_mar['sm_mar'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=3' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_mar['sk_mar']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_mar['sk_mar'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_mar['sk_mar'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=3' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_mar = $data_sm_mar['sm_mar'] + $data_sk_mar['sk_mar'];
                    if ($tot_mar==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_mar;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_mar;
                        echo "</small>";
                      }  
                   ?></th>
                   
                </tr>
                <tr>
                  <th style="text-align: center;">4</th>
                  <th>APRIL</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_apr['sm_apr']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_apr['sm_apr'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_apr['sm_apr'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=4' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_apr['sk_apr']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_apr['sk_apr'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_apr['sk_apr'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=4' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_apr = $data_sm_apr['sm_apr'] + $data_sk_apr['sk_apr'];
                    if ($tot_apr==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_apr;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_apr;
                        echo "</small>";
                      }  
                   ?></th>
                   
                </tr>
                <tr>
                  <th style="text-align: center;">5</th>
                  <th>MEI</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_mei['sm_mei']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_mei['sm_mei'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_mei['sm_mei'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=5' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_mei['sk_mei']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_mei['sk_mei'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_mei['sk_mei'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=5' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_mei = $data_sm_mei['sm_mei'] + $data_sk_mei['sk_mei'];
                    if ($tot_mei==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_mei;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_mei;
                        echo "</small>";
                      }  
                   ?></th>
                   
                </tr>
                <tr>
                  <th style="text-align: center;">6</th>
                  <th>JUNI</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_jun['sm_jun']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_jun['sm_jun'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_jun['sm_jun'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=6' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_jun['sk_jun']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_jun['sk_jun'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_jun['sk_jun'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=6' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_jun = $data_sm_jun['sm_jun'] + $data_sk_jun['sk_jun'];
                    if ($tot_jun==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_jun;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_jun;
                        echo "</small>";
                      }  
                   ?></th>
                  
                </tr>
                <tr>
                  <th style="text-align: center;">7</th>
                  <th>JULI</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_jul['sm_jul']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_jul['sm_jul'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_jul['sm_jul'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=7' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                     <?php 
                      if ($data_sk_jul['sk_jul']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_jul['sk_jul'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_jul['sk_jul'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=7' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_jul = $data_sm_jul['sm_jul'] + $data_sk_jul['sk_jul'];
                    if ($tot_jul==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_jul;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_jul;
                        echo "</small>";
                      }  
                   ?></th>
                   
                </tr>
                <tr>
                  <th style="text-align: center;">8</th>
                  <th>AGUSTUS</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_agu['sm_agu']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_agu['sm_agu'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_agu['sm_agu'];
                      
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=8' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sk_agu['sk_agu']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_agu['sk_agu'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_agu['sk_agu'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=8' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_agu = $data_sm_agu['sm_agu'] + $data_sk_agu['sk_agu'];
                    if ($tot_agu==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_agu;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_agu;
                        echo "</small>";
                      }  
                   ?></th>
                    
                </tr>
                <tr>
                  <th style="text-align: center;">9</th>
                  <th>SEPTEMBER</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_sep['sm_sep']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_sep['sm_sep'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_sep['sm_sep'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=9' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sk_sep['sk_sep']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_sep['sk_sep'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_sep['sk_sep'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=9' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_sep = $data_sm_sep['sm_sep'] + $data_sk_sep['sk_sep'];
                    if ($tot_sep==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_sep;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_sep;
                        echo "</small>";
                      }  
                   ?></th>
                   
                </tr>
                <tr>
                  <th style="text-align: center;">10</th>
                  <th>OKTOBER</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_okt['sm_okt']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_okt['sm_okt'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_okt['sm_okt'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=10' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sk_okt['sk_okt']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_okt['sk_okt'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_okt['sk_okt'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=10' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_okt = $data_sm_okt['sm_okt'] + $data_sk_okt['sk_okt'];
                    if ($tot_okt==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_okt;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_okt;
                        echo "</small>";
                      }  
                   ?></th>
                    
                </tr>
                <tr>
                  <th style="text-align: center;">11</th>
                  <th>NOVEMBER</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_nov['sm_nov']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_nov['sm_nov'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_nov['sm_nov'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=11' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sk_nov['sk_nov']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_nov['sk_nov'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_nov['sk_nov'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=11' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_nov = $data_sm_nov['sm_nov'] + $data_sk_nov['sk_nov'];
                    if ($tot_nov==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_nov;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_nov;
                        echo "</small>";
                      }  
                   ?></th>
                    
                </tr>
                <tr>
                  <th style="text-align: center;">12</th>
                  <th>DESEMBER</th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sm_des['sm_des']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_des['sm_des'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_des['sm_des'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sm.php&tahun=<?php echo $tahun ?>&bulan=12' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;">
                    <?php 
                      if ($data_sk_des['sk_des']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_des['sk_des'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_des['sk_des'];
                        echo "</small>";
                      }  
                    ?>
                  </th>
                  <th style="text-align: center; width: 10%" >
                     <a href='index.php?ref=lihat_detil_sk.php&tahun=<?php echo $tahun ?>&bulan=12' class='btn btn-info btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Rincian</a>
                   </th>
                  <th style="text-align: center;"><?php 
                    $tot_des = $data_sm_des['sm_des'] + $data_sk_des['sk_des'];
                    if ($tot_des==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_des;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-blue'>";
                        echo $tot_des;
                        echo "</small>";
                      }  
                   ?></th>
                    
                </tr>
                <tr>
                  <th colspan="2" style="text-align: center;">TOTAL</th>
                  <th style="text-align: center;" colspan="2">
                    <?php 
                    if ($data_sm_tot['sm_tot']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sm_tot['sm_tot'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-green'>";
                        echo $data_sm_tot['sm_tot'];
                        echo "</small>";
                      }  
                    
                    ?>  
                  </th>
                  <th style="text-align: center;" colspan="2"><?php 
                  if ($data_sk_tot['sk_tot']==0) {
                        echo "<small class='label bg-red'>";
                        echo $data_sk_tot['sk_tot'];
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-yellow'>";
                        echo $data_sk_tot['sk_tot'];
                        echo "</small>";
                      }  ?>
                    
                  </th>
                  <th style="text-align: center;" colspan="2"><?php 
                    $tot_semua = $data_sm_tot['sm_tot'] + $data_sk_tot['sk_tot'];
                    if ($tot_semua==0) {
                        echo "<small class='label bg-red'>";
                        echo $tot_semua;
                        echo "</small>";
                      }else{
                        echo "<small class='label bg-purple'>";
                        echo $tot_semua;
                        echo "</small>";
                      }
                   
                   ?></th>
                   
                </tr>

            
                
              </table>
            </div>
            <!-- /.box-body -->
            
          </div>
          

        </div>
      </div>
      </div>



      


    </section>


     <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */



    var DataSurat = {
      labels  : ['JANUARI', 'FEBRUARI', 'MARET', 'APRIL', 'MEI', 'JUNI', 'JULI', 'AGUSTUS', 'SEPTEMBER', 'OKTOBER', 'NOVEMBER', 'DESEMBER'],
      datasets: [
        {
          label               : 'Surat Masuk',
          fillColor           : 'rgba(100, 149, 237, 1)',
          strokeColor         : 'rgba(100, 149, 237, 1)',
          pointColor          : 'rgba(100, 149, 237, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $data_sm_jan['sm_jan']; ?>, 
                                <?php echo $data_sm_feb['sm_feb']; ?>, 
                                <?php echo $data_sm_mar['sm_mar']; ?>,
                                <?php echo $data_sm_apr['sm_apr']; ?>,
                                <?php echo $data_sm_mei['sm_mei']; ?>,
                                <?php echo $data_sm_jun['sm_jun']; ?>,
                                <?php echo $data_sm_jul['sm_jul']; ?>,
                                <?php echo $data_sm_agu['sm_agu']; ?>,
                                <?php echo $data_sm_sep['sm_sep']; ?>,
                                <?php echo $data_sm_okt['sm_okt']; ?>,
                                <?php echo $data_sm_nov['sm_nov']; ?>,
                                <?php echo $data_sm_des['sm_des']; ?>]
        },
        {
          label               : 'Surat Keluar',
          fillColor           : 'rgba(60,141,188,0.9)',
          strokeColor         : 'rgba(60,141,188,0.8)',
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [
                                <?php echo $data_sk_jan['sk_jan']; ?>, 
                                <?php echo $data_sk_feb['sk_feb']; ?>, 
                                <?php echo $data_sk_mar['sk_mar']; ?>,
                                <?php echo $data_sk_apr['sk_apr']; ?>,
                                <?php echo $data_sk_mei['sk_mei']; ?>,
                                <?php echo $data_sk_jun['sk_jun']; ?>,
                                <?php echo $data_sk_jul['sk_jul']; ?>,
                                <?php echo $data_sk_agu['sk_agu']; ?>,
                                <?php echo $data_sk_sep['sk_sep']; ?>,
                                <?php echo $data_sk_okt['sk_okt']; ?>,
                                <?php echo $data_sk_nov['sk_nov']; ?>,
                                <?php echo $data_sk_des['sk_des']; ?>
                                ]
        }
      ]
    }

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = DataSurat
    barChartData.datasets[1].fillColor   = '#FF6347'
    barChartData.datasets[1].strokeColor = '#FF6347'
    barChartData.datasets[1].pointColor  = '#FF6347'
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false
    barChart.Bar(barChartData, barChartOptions)
  })
</script>







