<?php 
  include "../../koneksi.php";

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



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPES | Grafik</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../../Assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../Assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../Assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../Assets/dist/css/AdminLTE.min.css">
   <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../../Assets/plugins/iCheck/all.css">
  <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
  <!-- modal jquery -->
  <script src="../../../Assets/js/jquery.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 
</head>
<body onload="javascript:forprint()"> <!-- onload="window.print();" -->

  <div class="wrapper">
  <!-- Main content -->
  
    <section class="invoice" id="print-ini">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <table  width="100%">
            <tr>
                <td width="170px" style="text-align: right;"><img src="../../Images/users/logo.png" width="110px" height="110px"></td>
                <td style=" text-align: center; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 145px;">
                   <p style="font-size: 25px;"><strong>PEMERINTAH KOTA DENPASAR</strong><br>
                   <strong>DINAS PERHUBUNGAN</strong></p> 
                    <p style="font-size: 15px;">Jl. Gunung Galanggung, Desa Padang Sambian Kaja <br>
                    Tepl. (0361) 8443506 Fax. (0361) 8443208 Denpasar</p>
                </td>
            </tr>
        </table>
        <hr>
        <table width="100%">
            <tr>
                <td style="text-align: center; font-size: 30px;">LAPORAN GRAFIK TAHUN <?php echo $tahun; ?></td>
            </tr>
        </table>
        <table border="1" width="100%" style="font-size: 15px">
            <tr>
               <td>
               
            
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>

              <div>

                Keterangan : &nbsp;&nbsp;
                <small><img src="../../Images/users/biru.png" width="20px" height="20px"></small>&nbsp;&nbsp;Surat Masuk &nbsp;&nbsp;&nbsp;&nbsp;
                <small><img src="../../Images/users/merah.png" width="20px" height="20px">&nbsp;&nbsp;&nbsp;</small>&nbsp;&nbsp;Surat Keluar
              </div>
            </div>
            <!-- /.box-body -->
          
               </td>
                
            </tr>
            
            
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
  
  </section>
   </div>

<div align="center">
    <a href="javascript:forprint()">
      <img src="http://www.iconarchive.com/download/i18772/iconshock/real-vista-text/print.ico" style="border:0; align:middle;width:0px" style="color: white;" width="0px" height="0px">
    </a>

    
  </div>
  <!-- /.content -->

<script>
    function forprint()
    {
      if (!window.print)
      {
        return
      }
      window.print()
    }
  </script>

 

<script type="text/javascript">
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


<!-- jQuery 3 -->
<script src="../../../Assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../Assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- ChartJS -->
<script src="../../../Assets/bower_components/Chart.js/Chart.js"></script>
<!-- Select2 -->
<script src="../../../Assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- FastClick -->
<script src="../../../Assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../Assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../../../Assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../../Assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../../Assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../Assets/dist/js/adminlte.min.js"></script>



<!-- ./wrapper -->
</body>
</html>
