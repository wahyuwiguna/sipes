<?php 
    include "../../koneksi.php";
    $id_surat_masuk = $_GET['id_surat_masuk'];

    $query = "SELECT * FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_masuk='$id_surat_masuk'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);

 ?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPES | Disposisi</title>
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
  <link rel="stylesheet" href="../../Assets/plugins/iCheck/all.css">

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
                <td style="text-align: center; font-size: 30px;">LEMBAR DISPOSISI</td>
            </tr>
        </table>
        <table border="1" width="100%" style="font-size: 15px">
            <tr>
                <td width="50%" style="text-align: left; padding: 25px 40px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="45%">Surat Dari</td>
                            <td width="10%">:</td>
                            <td><?php echo $data['asal_surat']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Surat</td>
                            <td>:</td>
                            <td><?php echo date("d M Y", strtotime($data['tgl_surat'])); ?></td>
                        </tr>
                        <tr>
                            <td>No Surat</td>
                            <td>:</td>
                            <td><?php echo $data['no_surat']; ?></td>
                        </tr>
                        <tr>
                            <td>Indeks</td>
                            <td>:</td>
                            <td><?php echo $data['indeks']; ?></td>
                        </tr>
                        <tr>
                            <td>Kode Surat</td>
                            <td>:</td>
                            <td><?php echo $data['kode_surat']; ?></td>
                        </tr>
                    </table>
                </td>
                <td width="50%" style="text-align: left; padding: 25px 40px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="45%">Diterima Tanggal</td>
                            <td width="10%">:</td>
                            <td><?php echo date("d M Y", strtotime($data['tgl_terima'])); ?></td>
                        </tr>
                        <tr>
                            <td>No Agenda</td>
                            <td>:</td>
                            <td><?php echo $data['no_agenda']; ?></td>
                        </tr>
                        <tr>
                            <td>Sifat Surat</td>
                            <td>:</td>
                            <td><?php echo $data['sifat_surat']; ?></td>
                        </tr>
                        
                    </table>
                </td>
                
            </tr>
            <tr>
                <td colspan="2" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="100%">Hal :</td>
                        </tr>
                        <tr>
                          <td><?php echo $data['perihal']; ?></td>
                        </tr>
                        
                    </table>
                </td>
              
            </tr>
            <tr>
                 <td width="50%" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Diteruskan Kepada :</td>
                        </tr>
                        <tr>
                          <td style="padding-left: 10px;">Kepala DINAS <br>
                              PERHUBUNGAN <br>
                              LALU LINTAS <br>
                            </td>
                        </tr>
                       
                    </table>
                </td>
                 <td width="50%" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Dengan Hormat Harap :</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="minimal"> Tanggapan dan Saran <br>
                              <input type="checkbox"> Proses Lebih Lanjut <br>
                              <input type="checkbox"> Koordinasi / Konfirmasikan <br>
                              <input type="checkbox"> .......................... <br>
                            </td>
                        </tr>
                       
                    </table>
                </td>
            </tr>
           <tr>
                <td colspan="2" style="text-align: left; padding: 25px 40px; padding-top: 5px; padding-bottom: 150px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="100%">Catatan :</td>
                        </tr>
                        <tr>
                          <td><?php echo $data['ket_disposisi']; ?></td>
                        </tr>
                        
                    </table>
                </td>
              
            </tr>
            
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    
  </section>
  <!-- /.content -->
</div>

<!-- iCheck 1.0.1 -->
<script src="../../Assets/plugins/iCheck/icheck.min.js"></script>
<!-- ./wrapper -->
</body>
</html>
