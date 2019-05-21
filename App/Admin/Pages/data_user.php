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
        Users
         <!-- <a href="dashboard.php?ref=add_data_buku.php" class="btn btn-success pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Data Jenis Surat</a> -->
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <!-- <a href="index.php?ref=tambah_jenis_surat.php" class="btn btn-success pull-left"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Tambah Data Jenis Surat</a> -->
              <button class="btn btn-success" data-toggle="modal" data-target="#ModalAdd"><i class="fa fa-plus"></i>&nbsp;Tambah User</button></p>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data_table" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama User</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Username</th>
                  <th>Jabatan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
<?php
include "../koneksi.php";
$query = "SELECT * FROM tb_user ORDER BY `id_user` DESC"; 
$sql = mysqli_query($koneksi, $query); 
while($data = mysqli_fetch_array($sql)){
echo "<tr>";
echo "<td>".$data['nama_user']."</td>";
echo "<td>".$data['jenis_kelamin']."</td>";
echo "<td>".$data['alamat_user']."</td>";
echo "<td>".$data['email']."</td>";
echo "<td>".$data['no_hp']."</td>";
echo "<td>".$data['username']."</td>";
if ($data['jabatan']=='admin') {
  echo "<td style='text-align:center;'><span class='label label-warning'>Admin</span></td>";
}elseif ($data['jabatan']=='kepbid') {
  echo "<td style='text-align:center;'><span class='label label-danger'>Kepala Bidang</span></td>";
}elseif ($data['jabatan']=='superadmin') {
  echo "<td style='text-align:center;'><span class='label label-primary'>Super Admin</span></td>";
}

if ($data['status']=='1') {
  echo "<td style='text-align:center;'><span class='label label-success'>Aktif</span></td>";
}elseif ($data['status']=='0') {
  echo "<td style='text-align:center;'><span class='label label-danger'>Non-Aktif</span></td>";
}
?>
<td>
        <center>
        <a href="#" class='open_modal' id='<?php echo $data['id_user']; ?>'><button class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ubah</button></a>
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

  <!-- Modal Popup untuk Add--> 
  <div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="Proses/add_data_user.php" name="modal_popup" enctype="multipart/form-data" method="post">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Tambah User</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Nama User</label>
              <input type="text" name="nama_user" class="form-control" required="required"/>
              
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
                        <p>
                        <input type="radio" name="jenis_kelamin" value="Pria" checked="" required /> &nbsp;Pria &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="jenis_kelamin" value="Wanita" />
                         &nbsp;Wanita
                        </p>
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat_user" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>No HP</label>
              <input type="number" name="no_hp" class="form-control" required="required"/>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required="required"/>
            </div>
             <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required="required"/>
            </div>
             <div class="form-group">
              <label>Jabatan</label>
              <select class="form-control" name="jabatan" required="required"> 
                  <option value="">- Pilih -</option>  
                  <option value="superadmin">Super Admin</option>
                  <option value="admin">Admin</option>
                  <option value="kepbid">Kepala Bidang</option>        
              </select>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Batal</button>
              <button class="btn btn-primary" type="submit" name="add" value="Simpan">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

   <!-- Modal Popup untuk Edit--> 
  <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>

    </section>


<!-- Javascript untuk popup modal Edit--> 
  <script type="text/javascript">
   $(document).ready(function () {
     $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
      $.ajax({
       url: "Pages/ubah_user.php",
       type: "GET",
       data : {id_user: m,},
       success: function (ajaxData){
         $("#ModalEdit").html(ajaxData);
         $("#ModalEdit").modal('show',{backdrop: 'true'});
       }
     });
    });
   });
  </script>