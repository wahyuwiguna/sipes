<!-- Content Header (Page header) -->
    <section class="content-header">

<?php
        if(isset($_GET['notif'])){
            if($_GET['notif'] == "gagal"){
                echo "<div class='alert alert-warning alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-warning'></i> Terjadi Kesalahan!</h4>
                Mohon Maaf Terjadi Kesalahan.";
                echo "</div>";
            }else if($_GET['notif'] == "berhasil"){
               echo "<div class='alert alert-success alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-check'></i> Berhasil!</h4>
                Surat Masuk Telah Dibaca.";
                echo "</div>";
            }
      }
?>
      <h1>
        Data Surat Masuk
         
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs x-->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Surat Masuk Belum Dibaca</a></li>
              <li><a href="#tab_2" data-toggle="tab">Semua Surat Masuk</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
             <div class="box-body">
              <table id="surat_masuk_blm" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align: center;">No Surat</th>
                  <th style="text-align: center;">Tanggal Surat</th>
                  <!-- <th>Tipe Surat</th> -->
                  <th style="text-align: center;">Jenis Surat</th>
                  <th style="text-align: center;">Asal Surat</th>
                  <th style="text-align: center;">Perihal</th>
                  <th style="text-align: center;">Status</th>
                  <th style="text-align: center;" >Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php
include "../koneksi.php";
$query = "SELECT `tb_surat_masuk`.`id_surat_masuk`,`tb_surat_masuk`.`no_surat`,`tb_surat_masuk`.`tipe_surat`,`tb_jenis_surat`.`jenis_surat`, `tb_surat_masuk`.`tgl_surat`,
`tb_surat_masuk`.`asal_surat`, `tb_surat_masuk`.`perihal`, `tb_surat_masuk`.`status_disposisi` FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND `tb_surat_masuk`.`status_disposisi` = '0' ORDER BY `tb_surat_masuk`.`id_surat_masuk`"; 
$sql = mysqli_query($koneksi, $query); 
while($data = mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$data['no_surat']."</td>";
echo "<td>".date("d M Y", strtotime($data['tgl_surat']))."</td>";
// echo "<td>".$data['tipe_surat']."</td>";
echo "<td>".$data['jenis_surat']."</td>";
echo "<td>".$data['asal_surat']."</td>";
echo "<td>".$data['perihal']."</td>";
if ($data['status_disposisi']=='1') {
  echo "<td style='text-align:center;'><span class='label label-success'>Sudah Dibaca</span></td>";
}else{
  echo "<td style='text-align:center;'><span class='label label-danger'>Belum Dibaca</span></td>";
}
?>
<td>
        <center>
          <a href="#" class='open_modal' id='<?php echo $data['id_surat_masuk']; ?>'><button class="btn btn-info btn-xs"><i class="fa fa-paper-plane"></i> Lihat</button></a>


        
       </center>
</td>
<?php 
echo "</tr>";
}
?>
                </tbody>
                
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="box-body">
              <table id="data_table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No Surat</th>
                  <th>Tanggal Surat</th>
                  <!-- <th>Tipe Surat</th> -->
                  <th>Jenis Surat</th>
                  <th>Asal Surat</th>
                  <th>Perihal</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php
include "../koneksi.php";
$query = "SELECT `tb_surat_masuk`.`id_surat_masuk`,`tb_surat_masuk`.`no_surat`,`tb_surat_masuk`.`tipe_surat`,`tb_jenis_surat`.`jenis_surat`, `tb_surat_masuk`.`tgl_surat`,
`tb_surat_masuk`.`asal_surat`, `tb_surat_masuk`.`perihal`, `tb_surat_masuk`.`status_disposisi` FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` ORDER BY `tb_surat_masuk`.`id_surat_masuk`"; 
$sql = mysqli_query($koneksi, $query); 
while($data = mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$data['no_surat']."</td>";
echo "<td>".$data['tgl_surat']."</td>";
// echo "<td>".$data['tipe_surat']."</td>";
echo "<td>".$data['jenis_surat']."</td>";
echo "<td>".$data['asal_surat']."</td>";
echo "<td>".$data['perihal']."</td>";
if ($data['status_disposisi']=='1') {
  echo "<td style='text-align:center;'><span class='label label-success'>Sudah Dibaca</span></td>";
}else{
  echo "<td style='text-align:center;'><span class='label label-danger'>Belum Dibaca</span></td>";
}
?>
<td>
        <center>
        
         <a href='index.php?ref=lihat_surat_masuk.php&id_surat_masuk=<?php echo $data['id_surat_masuk'] ?>' class='btn btn-warning btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat</a>
       </center>
</td>
<?php 
echo "</tr>";
}
?>
                </tbody>
                
              </table>
            </div>
              </div>
              <!-- /.tab-pane -->
              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->


        <!-- /.col -->
      </div>



    </section>

    <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>


    <script type="text/javascript">
   $(document).ready(function () {
     $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
       url: "Pages/lihat_disposisi.php",
       type: "GET",
       data : {id_surat_masuk: m,},
       success: function (ajaxData){
         $("#ModalEdit").html(ajaxData);
         $("#ModalEdit").modal('show',{backdrop: 'true'});
       }
     });
    });
   });
  </script>






    