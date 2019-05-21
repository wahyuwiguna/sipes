<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Surat Keluar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
           
            <!-- /.box-header -->
       
              <form role="form" method="post" action="Proses/add_surat_keluar.php" enctype="multipart/form-data">

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
                  <input type="text" name="tgl_surat" class="form-control pull-right" id="tgl_surat" value=""> 
                </div></td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Nomor Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="text" class="form-control" name="no_surat" required="required">
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Kode Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                   <input type="text" class="form-control" name="kode_surat" required="required">
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Tipe Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <select class="form-control" name="tipe_surat" required="required">
                    <option value="">- Pilih -</option>
                    <option value="Langsung">Langsung</option>
                    <option value="Tembusan">Tembusan</option>
                    <option value="Lain-Lain">Lain-Lain</option>
                    
                  </select>
                </td>
              </tr>
              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Jenis Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <select class="form-control select2" name="id_jenis" style="width: 100%;" required="required">
                   <?php 
                   include ('../koneksi.php');
                   $query = "SELECT * FROM tb_jenis_surat ORDER BY id_jenis";
                   $sql = mysqli_query($koneksi, $query); 
                   

                   echo "<option value='' selected>- Pilih -</option>";
                   while($data = mysqli_fetch_array($sql)){
                     echo "<option value='$data[id_jenis]'> $data[jenis_surat]</option>";
                   }

                    ?>
                  </select>
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Sifat Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                 <select class="form-control" name="sifat_surat" required="required">
                    <option value="">- Pilih -</option>
                    <option value="Sangat Segera">Sangat Segera</option>
                    <option value="Segera">Segera</option>
                    <option value="Rahasia">Rahasia</option>
                    
                  </select>
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Indeks</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="text" class="form-control" name="indeks" required="required">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Nomor Agenda</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="number" class="form-control" name="no_agenda" required="required">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Tujuan Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                   <input type="text" class="form-control" name="tujuan_surat" required="required">
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Perihal</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                   <input type="text" class="form-control" name="perihal" required="required">
                </td>
              </tr>

              <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Keterangan Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <textarea class="form-control" rows="5" name="ket_surat" required="required"></textarea>
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Tanggal Kirim</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="tgl_kirim" class="form-control pull-right" id="tgl_kirim" required="required">
                </div>
                </td>
              </tr>

               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Pengirim Surat</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="text" class="form-control" name="pengirim" required="required">
                </td>
              </tr>


               <tr>
                <td style="padding-left: 10px; padding-top: 5px;">Upload File Scan</td>
                <td style="padding-left: 20px; padding-top: 10px;">
                  <input type="file" name="scan_surat" required="required">
                  <p class="help-block">Pastikan file yang anda upload berformat *.pdf</p>
                </td>
              </tr>
                  </table>

                </div>

              </div>
              

               

              

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary" name="add"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Simpan</button>
              <a href="index.php?ref=data_surat_keluar.php" class="btn btn-success"><i class="fa fa-undo" aria-hidden="true"></i>&nbsp;Kembali</a>


            </div>

          </form>
         
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div> 



      </div>




    </section>


