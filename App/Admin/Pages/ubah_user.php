<?php
include "../../koneksi.php";
$id_user=$_GET['id_user'];
$modal=mysqli_query($koneksi,"SELECT * FROM tb_user WHERE id_user='$id_user'");
while($data=mysqli_fetch_array($modal)){
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Data User</h4>
            </div>

        <div class="modal-body">
          <form action="Proses/edit_user.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
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
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control" name="jabatan"> 
                      <?php 
                              // echo "<option value='$data[semester]'>$data[semester]</option>";
                              if ($data[jabatan]=="admin") {
                                    echo "<option value='superadmin'>Super Admin</option>";
                                    echo "<option value='admin' selected>Admin</option>";
                                    echo "<option value='kepbid'>Kepala Bidang</option>";
                              }elseif ($data[jabatan]=="kepbid") {
                                    echo "<option value='superadmin'>Super Admin</option>";
                                    echo "<option value='admin'>Admin</option>";
                                    echo "<option value='kepbid' selected>Kepala Bidang</option>";
                                
                              }elseif ($data[jabatan]=="superadmin") {
                                    echo "<option value='superadmin' selected>Super Admin</option>";
                                    echo "<option value='admin'>Admin</option>";
                                    echo "<option value='kepbid'>Kepala Bidang</option>";
                                
                              }

                       ?> 
                              
                  </select>
                </div>
                <div class="form-group">
                  <label>Status</label>
                        <p>
                        <?php 
                          if ($data['status']=="1") {
                            echo "<input type='radio' name='status' value='1' checked /> &nbsp;Aktif &nbsp;&nbsp;&nbsp;
                            <input type='radio' name='status' value='0' />
                            &nbsp;Non-Aktif";
                          }elseif ($data['status']=="0") {
                            echo "<input type='radio' name='status' value='1'/> &nbsp;Aktif &nbsp;&nbsp;&nbsp;
                            <input type='radio' name='status' value='0' checked />
                            &nbsp;Non-Aktif";
                          }
                         ?>
                        </p>
                </div>
                 
                <div class="modal-footer">
                   <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">Batal</button>
                <button class="btn btn-primary" type="submit" name="update">Ubah</button>
              </div>

       </form>

       <?php } ?>

   </div>

   
</div>
</div>