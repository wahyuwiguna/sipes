<!-- Content Header (Page header) -->
    <section class="content-header">

<?php
        if(isset($_GET['notif'])){
            if($_GET['notif'] == "gagal"){
                echo "<div class='alert alert-warning alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-warning'></i> Terjadi Kesalahan!</h4>
                Mohon Maaf Terjadi Kesalahan Dalam Menyimpan Data.";
                echo "</div>";
            }else if($_GET['notif'] == "berhasil"){
               echo "<div class='alert alert-success alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-check'></i> Berhasil!</h4>
                Anda Berhasil Menambahkan Data Baru.";
                echo "</div>";
            }else if($_GET['notif'] == "update"){
               echo "<div class='alert alert-info alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-info'></i> Berhasil Update!</h4>
                Anda Berhasil Mengubah Data.";
                echo "</div>";
            }
      }
?>
      <h1>
        Surat Keluar
         <!-- <a href="dashboard.php?ref=add_data_buku.php" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Data Jenis Surat</a> -->
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No Surat</th>
                  <th>Tanggal Surat</th>
                  <!-- <th>Tipe Surat</th> -->
                  <th>Jenis Surat</th>
                  <th>Tujuan Surat</th>
                  <th>Perihal</th>
                  <!-- <th>Pengirim</th> -->
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php
include "../koneksi.php";
$query = "SELECT `tb_surat_keluar`.`id_surat_keluar`,`tb_surat_keluar`.`no_surat`,`tb_surat_keluar`.`tipe_surat`,`tb_jenis_surat`.`jenis_surat`, `tb_surat_keluar`.`tgl_surat`,
`tb_surat_keluar`.`tujuan_surat`, `tb_surat_keluar`.`perihal` FROM `tb_surat_keluar` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_keluar`.`id_jenis` = `tb_jenis_surat`.`id_jenis` ORDER BY `tb_surat_keluar`.`id_surat_keluar`"; 
$sql = mysqli_query($koneksi, $query); 
while($data = mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$data['no_surat']."</td>";
echo "<td>".date("d M Y", strtotime($data['tgl_surat']))."</td>";
// echo "<td>".$data['tipe_surat']."</td>";
echo "<td>".$data['jenis_surat']."</td>";
echo "<td>".$data['tujuan_surat']."</td>";
echo "<td>".$data['perihal']."</td>";

?>
<td>
        <center>
         <a href='index.php?ref=lihat_surat_keluar.php&id_surat_keluar=<?php echo $data['id_surat_keluar'] ?>' class='btn btn-warning btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat</a>
       </center>
</td>
<?php 
echo "</tr>";
}
?>
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>        
      </div>

    </section>

