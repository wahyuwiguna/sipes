<?php 
    include "../koneksi.php";
    $id_surat_keluar = $_GET['id_surat_keluar'];

    $query = "SELECT * FROM `tb_surat_keluar` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_keluar`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_keluar='$id_surat_keluar'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);

 ?>

 <!-- Content Header (Page header) -->
   <!--  <section class="content-header">
      <h1>
        Disposisi Surat
      </h1>
    </section> -->

    <!-- Main content -->
    <section class="content container-fluid">
          <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-paper-plane"></i>  Detil Surat Keluar
                      
          </h2>

        </div>
        <!-- /.col -->

      </div>

      <!-- info row -->
     

      <div class="row">
        <!-- accepted payments column -->
       
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:40%">No Surat</th>
                <td><?php echo $data['no_surat']; ?></td>
              </tr>
              <tr>
                <th style="width:40%">Tanggal Surat</th>
                <td><?php echo $data['tgl_surat']; ?></td>
              </tr>
              <tr>
                <th>Tipe Surat</th>
                <td><?php echo $data['tipe_surat']; ?></td>
              </tr>
              <tr>
               <th>Jenis Surat</th>
                <td><?php echo $data['jenis_surat']; ?></td>
              </tr>
              <tr>
                <th>Indeks</th>
                <td><?php echo $data['indeks']; ?></td>
              </tr>
              <tr>
                <th>No Agenda</th>
                <td><?php echo $data['no_agenda']; ?></td>
              </tr>
              <tr>
                <th>Kode Surat</th>
                <td><?php echo $data['kode_surat']; ?></td>
              </tr>
              <tr>
                <th>Sifat Surat</th>
                <td><?php echo $data['sifat_surat']; ?></td>
              </tr>
              <tr>
                <th>Tujuan Surat</th>
                <td><?php echo $data['tujuan_surat']; ?></td>
              </tr>
              <tr>
                <th>Perihal</th>
                <td><?php echo $data['perihal']; ?></td>
              </tr>
              <tr>
                <th>Keterangan Surat</th>
                <td><?php echo $data['ket_surat']; ?></td>
              </tr>
              <tr>
                <th>Tanggal Dikirim</th>
                <td><?php echo $data['tgl_kirim']; ?></td>
              </tr>
              <tr>
                <th>Pengirim</th>
                <td><?php echo $data['pengirim']; ?></td>
              </tr>
              
            </table>
          </div>
        </div>
        <!-- /.col -->

         
      </div>
      <!-- /.row -->



      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         <!--  <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
         <a href="index.php?ref=data_surat_keluar.php" class="btn btn-success"><i class="fa fa-reply" aria-hidden="true"></i>&nbsp;Kembali</a>

         <?php 
            echo "<a href='Upload/Surat_Keluar/".$data['scan_surat']."' class='btn btn-warning' target='_blank'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat File Scan Surat</a>";
          ?>
         
        </div>
      </div>
    </section>
     




    </section>


