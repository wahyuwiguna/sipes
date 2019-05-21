<?php 
include ('../koneksi.php');
$id_surat_masuk = $_GET['id_surat_masuk'];

  $query = "SELECT * FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_masuk='$id_surat_masuk'";
  $sql = mysqli_query($koneksi, $query); 
  $data = mysqli_fetch_array($sql);

 ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ubah Data Surat Masuk
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box box-warning">

          <form role="form" method="post" action="Proses/edit_surat_masuk.php?id_surat_masuk=<?php echo $id_surat_masuk; ?>" enctype="multipart/form-data">

            <div class="box-body">
              <div class="row"> 
                <div class="col-md-12"> 
            
              <table border="0" width="70%">
                <tr>
                <td style="padding-left: 10px;">Tanggal Surat</td>
                <td style="padding-left: 20px;"><div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_surat" class="form-control pull-right" id="tgl_surat" value="<?php echo $data['tgl_surat'] ?>">
                </div></td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Nomor Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="text" class="form-control" name="no_surat" required="required" value="<?php echo $data['no_surat'] ?>">
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Kode Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                    <input type="text" class="form-control" name="kode_surat" required="required" value="<?php echo $data['kode_surat'] ?>">
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Tipe Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <select class="form-control" name="tipe_surat" required="required">
                  <?php 
                    if ($data['tipe_surat']=='Langsung') {
                      echo "<option value='Langsung' selected>Langsung</option>";
                      echo "<option value='Tembusan'>Tembusan</option>";
                      echo "<option value='Lain-Lain'>Lain-Lain</option>";
                    }elseif ($data['tipe_surat']=='Tembusan') {
                      echo "<option value='Langsung'>Langsung</option>";
                      echo "<option value='Tembusan' selected>Tembusan</option>";
                      echo "<option value='Lain-Lain'>Lain-Lain</option>";
                    }else{
                      echo "<option value='Langsung'>Langsung</option>";
                      echo "<option value='Tembusan'>Tembusan</option>";
                      echo "<option value='Lain-Lain' selected>Lain-Lain</option>";
                    }
                   ?>
                                 
                  </select>
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Jenis Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <select class="form-control select2" name="id_jenis" style="width: 100%;" required="required">
                  <?php 
                    //display values in combobox/dropdown
                    $result = mysqli_query($koneksi,"SELECT * FROM tb_jenis_surat ORDER BY jenis_surat");
                    while($row = mysqli_fetch_assoc($result))
                    {
                  ?> 
                  <option value="<?php echo $row['id_jenis']; ?>" <?php if ($row['id_jenis'] == $data['id_jenis'] ) { echo "selected"; } ?>> <?php  echo $row['jenis_surat']; ?> </option>;
                      <?php
                    } 
                  ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Sifat Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                 <select class="form-control" name="sifat_surat" required="required">
                    <?php 
                    if ($data['sifat_surat']=='Sangat Segera') {
                      echo "<option value='Sangat Segera' selected>Sangat Segera</option>";
                      echo "<option value='Segera'>Segera</option>";
                      echo "<option value='Rahasia'>Rahasia</option>";
                    }elseif ($data['sifat_surat']=='Segera') {
                      echo "<option value='Sangat Segera'>Sangat Segera</option>";
                      echo "<option value='Segera' selected>Segera</option>";
                      echo "<option value='Rahasia'>Rahasia</option>";
                    }elseif ($data['sifat_surat']=='Rahasia') {
                      echo "<option value='Sangat Segera'>Sangat Segera</option>";
                      echo "<option value='Segera'>Segera</option>";
                      echo "<option value='Rahasia' selected>Rahasia</option>";
                    }
                   ?>                    
                  </select>
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Indeks</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="text" class="form-control" name="indeks" required="required" value="<?php echo $data['indeks'] ?>">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Nomor Agenda</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                 <input type="text" class="form-control" name="no_agenda" required="required" value="<?php echo $data['no_agenda'] ?>">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Asal Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                   <input type="text" class="form-control" name="asal_surat" required="required" value="<?php echo $data['asal_surat'] ?>">
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Perihal</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                    <input type="text" class="form-control" name="perihal" required="required" value="<?php echo $data['perihal'] ?>">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Keterangan Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <textarea class="form-control" rows="3" name="ket_surat" required="required"><?php echo $data['ket_surat'] ?></textarea>
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Tanggal Terima</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_terima" class="form-control pull-right" id="tgl_terima" required="required" value="<?php echo $data['tgl_terima'] ?>">
                </div>
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Penerima Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                 <input type="text" class="form-control" name="penerima" required="required" value="<?php echo $data['penerima'] ?>">
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Catatan Disposisi</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                 <textarea class="form-control" rows="10" name="ket_disposisi" required="required"><?php echo $data['ket_disposisi'] ?></textarea>
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Upload File Scan</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="checkbox" name="ubah_foto" value="true"> Centang jika ingin mengubah scan surat<br>
                  <input type="file" name="scan_surat" onchange="readURL(this);">
                  <p class="help-block">Pastikan file yang anda upload berformat *.pdf</p>
                </td>
              </tr>
              </table>

              
                </div>



                
              </div>
            
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Update</button>
              <a href="index.php?ref=data_surat_masuk.php" class="btn btn-success"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Kembali</a>


            </div>

          </form>

        </div>
    </section>
    <!-- /.content -->

  