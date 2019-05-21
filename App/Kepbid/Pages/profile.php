<?php 
include ('../koneksi.php');
$id_user = $_SESSION['id_user'];

  $query = "SELECT * FROM tb_user WHERE id_user = $id_user";
  $sql = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_array($sql);
 ?>

<section class="content-header">
<?php
        if(isset($_GET['notif'])){
            if($_GET['notif'] == "gagal"){
                echo "<div class='alert alert-warning alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-warning'></i> Terjadi Kesalahan!</h4>
                Mohon Maaf Terjadi Kesalahan.";
                echo "</div>";
            }else if($_GET['notif'] == "update"){
               echo "<div class='alert alert-info alert-dismissible'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
                echo "<h4><i class='icon fa fa-check'></i> Berhasil!</h4>
                Data Anda Telah Terupdate..";
                echo "</div>";
            }
      }
?>
      <h1>
        Profile User
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../images/users/1_admin.png" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $data['nama_user']; ?></h3>

              <p class="text-muted text-center"><small class='label bg-green'>Kepala Bidang</small></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Jenis Kelamin</b> <a class="pull-right"><?php echo $data['jenis_kelamin']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right"><?php echo $data['alamat_user']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $data['email']; ?></a>
                </li>
                <li class="list-group-item">
                  <b>No HP</b> <a class="pull-right"><?php echo $data['no_hp']; ?></a>
                </li>
              </ul>

             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#datauser" data-toggle="tab">Data User</a></li>
              <li><a href="#ubahpassword" data-toggle="tab">Ubah Password</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="datauser">
              <form action="Proses/edit_profile.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" >
                  <label>Nama User</label>
                    <input type="hidden" name="id_user"  class="form-control" value="<?php echo $data['id_user']; ?>" />
                    <input type="text" name="nama_user"  class="form-control" required="required" value="<?php echo $data['nama_user']; ?>"/>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                        <p>
                        <?php 
                          if ($data['jenis_kelamin']=="Pria") {
                            echo "<input type='radio' name='jenis_kelamin' value='Pria' checked /> &nbsp;Pria &nbsp;&nbsp;&nbsp;
                            <input type='radio' name='jenis_kelamin' value='Wanita' />
                            &nbsp;Wanita";
                          }elseif ($data['jenis_kelamin']=="Wanita") {
                            echo "<input type='radio' name='jenis_kelamin' value='Pria' required /> &nbsp;Pria &nbsp;&nbsp;&nbsp;
                            <input type='radio' name='jenis_kelamin' value='Wanita' checked />
                            &nbsp;Wanita";
                          }
                         ?>
                        </p>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_user" class="form-control" required="required" value="<?php echo $data['alamat_user']; ?>"/>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" required="required" value="<?php echo $data['email']; ?>"/>
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="number" name="no_hp" class="form-control" required="required" value="<?php echo $data['no_hp']; ?>"/>
                </div>
                
                
                 
                <div class="modal-footer">
                   
                <button class="btn btn-primary" type="submit" name="update">Update</button>
              </div>

       </form>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="ubahpassword">
                       <form class="form-horizontal"  method="post" action="Proses/ubah_password.php?id_user=<?php echo $data['id_user']; ?>" >
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Lama</label>

                        <div class="col-sm-10">
                          <input type="Password" class="form-control" name="pwd_lama" required="" placeholder="Password Lama">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Baru</label>

                        <div class="col-sm-10">
                          <input type="Password" class="form-control" name="pwd_baru" required="" placeholder="Password Baru">
                        </div>
                      </div>
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Confirm</label>

                        <div class="col-sm-10">
                          <input type="Password" class="form-control" name="pwd_confirm" required="" placeholder="Confirm Password Baru">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" name="btn_pass" class="btn btn-danger">Update Password</button>
                        </div>
                      </div>
                    </form>
                
              </div>
              <!-- /.tab-pane -->


              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->