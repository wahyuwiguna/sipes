<?php 
    include "../../koneksi.php";
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPES | Detail Jumlah Surat Keluar</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();"><!-- onload="window.print();" -->
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
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
                <td style="text-align: center; font-size: 20px;">JUMLAH JENIS SURAT KELUAR <br> BULAN <?php 
                 switch ($bulan) {
            case '1':
              echo "JANUARI";
              break;
            case '2':
              echo "FEBRUARI";
              break;
            case '3':
              echo "MARET";
              break;
            case '4':
              echo "APRIL";
              break;
            case '5':
              echo "MEI";
              break;
            case '6':
              echo "JUNI";
              break;
            case '7':
              echo "JULI";
              break;
            case '8':
              echo "AGUSTUS";
              break;
            case '9':
              echo "SEPTEMBER";
              break;
            case '10':
              echo "OKTOBER";
              break;
            case '11':
              echo "NOVEMBER";
              break;
            case '12':
              echo "DESEMBER";
              break;
            default:
              # code...
              break;
          }
                 ?> TAHUN <?php echo "$tahun"; ?></td>
            </tr>
        </table>
        <br>
        <table border="1" width="40%" style="font-size: 10px; margin-left: 210px;">
            <tr>
                  <th style="width: 5%; text-align: center;">No</th>
                  <th style="width: 25%; text-align: center;">JENIS SURAT</th>
                  <th style="width: 10%; text-align: center;">JUMLAH</th>
            </tr>
<?php 
  $query_sk = "SELECT `tb_jenis_surat`.`jenis_surat`, COUNT(*) AS tot_sk FROM `tb_surat_keluar` INNER JOIN `tb_jenis_surat` ON `tb_surat_keluar`.`id_jenis` = `tb_jenis_surat`.`id_jenis` WHERE YEAR(`tb_surat_keluar`.`tgl_kirim`)=$tahun AND MONTH(`tb_surat_keluar`.`tgl_kirim`) = $bulan GROUP BY `tb_surat_keluar`.`id_jenis`";
  $sql_sk = mysqli_query($koneksi, $query_sk); 
  $tot_semua = 0;
   $nomor = 0;
  while ($data_sk = mysqli_fetch_array($sql_sk)) {
    echo "<tr>";
    $nomor = $nomor + 1;
    echo "<td style='text-align:center;'>".$nomor."</td>";
    echo "<td style='padding-left: 10px;'>".$data_sk['jenis_surat']."</td>";
    echo "<td style='text-align:center;'>".$data_sk['tot_sk']."</td>";
    $tot_semua = $tot_semua + $data_sk['tot_sk'];
    echo "</tr>";
  }

 ?>
              <tr>
                <th style="text-align: center;" colspan="2">TOTAL</th>
                <th style="text-align: center;"><?php echo $tot_semua; ?></th>
              </tr>

        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
