<?php
include "../../koneksi.php";
$id_jenis=$_GET['id_jenis'];
$modal=mysqli_query($koneksi,"SELECT * FROM tb_jenis_surat WHERE id_jenis='$id_jenis'");
while($data=mysqli_fetch_array($modal)){
    ?>
    <div class="modal-dialog">
        <div class="modal-content">

           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Ubah Jenis Surat</h4>
            </div>

        <div class="modal-body">
          <form action="Proses/edit_jenis_surat.php" name="modal_popup" enctype="multipart/form-data" method="POST">
            
                <div class="form-group" >
                  <label>Jenis Surat</label>
                    <input type="hidden" name="id_jenis"  class="form-control" value="<?php echo $data['id_jenis']; ?>" />
                    <input type="text" name="jenis_surat"  class="form-control" required="required" value="<?php echo $data['jenis_surat']; ?>"/>
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