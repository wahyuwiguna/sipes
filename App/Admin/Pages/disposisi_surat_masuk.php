<?php 
    include "../koneksi.php";
    $id_surat_masuk = $_GET['id_surat_masuk'];

    $query = "SELECT * FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_masuk='$id_surat_masuk'";
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
            <i class="fa fa-paper-plane"></i>  Disposisi Surat
                      
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
                <td><?php echo date("d M Y", strtotime($data['tgl_surat'])); ?></td>
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
                <th>Asal Surat</th>
                <td><?php echo $data['asal_surat']; ?></td>
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
                <th>Tanggal Diterima</th>
                <td><?php echo $data['tgl_terima']; ?></td>
              </tr>
              <tr>
                <th>Penerima</th>
                <td><?php echo $data['penerima']; ?></td>
              </tr>
              <tr>
                <th>Keterangan Disposisi</th>
                <td><?php echo $data['ket_disposisi']; ?></td>
              </tr>
              <tr>
                <th>Status Surat</th>
                <?php 
                  if ($data['status_disposisi']=='1') {
                  echo "<td><span class='label label-success'>Sudah Dibaca</span></td>";
                }else{
                  echo "<td><span class='label label-danger'>Belum Dibaca</span></td>";
                }
                 ?>

              </tr>
            </table>
          </div>
        </div>

        <div class="col-md-6">

          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->



      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
         
         <?php 
            echo "<a href='Pages/disposisi_print.php?id_surat_masuk=$id_surat_masuk' target='_blank' class='btn btn-warning'><i class='fa fa-print' aria-hidden='true'></i>&nbsp;Cetak Disposisi</a>";
          ?>

           <?php 
            if ($data['status_disposisi']=='0') {
              echo "<a href='Proses/kirim_notif.php' class='btn btn-primary'><i class='fa fa-bell' aria-hidden='true'></i>&nbsp;Kirim Notif</a>";
            }else{
              
            }
            
          ?>

           <?php 
            echo "<a href='Upload/Surat_Masuk/".$data['scan_surat']."' class='btn btn-success' target='_blank'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat File Scan Surat</a>";
          ?>
         
         
        </div>
      </div>
    </section>
     




    </section>


