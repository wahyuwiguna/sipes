<?php
include "../../koneksi.php";
    $id_surat_masuk = $_GET['id_surat_masuk'];

    $query = "SELECT * FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_masuk='$id_surat_masuk'";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);
    ?>
    <div class="modal-dialog" style="width: 1000px;">
        <div class="modal-content">

           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            
            </div>

        <div class="modal-body">
        <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <table  width="100%">
            <tr>
                <td width="170px" style="text-align: right;"><img src="../Images/users/logo.png" width="110px" height="110px"></td>
                <td style=" text-align: center; padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 145px;">
                   <p style="font-size: 25px;"><strong>PEMERINTAH KOTA DENPASAR</strong><br>
                   <strong>DINAS PERHUBUNGAN</strong></p> 
                    <p style="font-size: 15px;">Jl. Gunung Galanggung, Desa Padang Sambian Kaja <br>
                    Tepl. (0361) 8443506 Fax. (0361) 8443208 Denpasar</p>
                </td>
            </tr>
        </table>
        <hr>
        <table width="100%">
            <tr>
                <td style="text-align: center; font-size: 30px;">LEMBAR DISPOSISI</td>
            </tr>
        </table>
        <table border="1" width="100%" style="font-size: 15px">
            <tr>
                <td width="50%" style="text-align: left; padding: 25px 40px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="45%">Surat Dari</td>
                            <td width="10%">:</td>
                            <td><?php echo $data['asal_surat']; ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Surat</td>
                            <td>:</td>
                            <td><?php echo date("d M Y", strtotime($data['tgl_surat'])); ?></td>
                        </tr>
                        <tr>
                            <td>No Surat</td>
                            <td>:</td>
                            <td><?php echo $data['no_surat']; ?></td>
                        </tr>
                        <tr>
                            <td>Indeks</td>
                            <td>:</td>
                            <td><?php echo $data['indeks']; ?></td>
                        </tr>
                        <tr>
                            <td>Kode Surat</td>
                            <td>:</td>
                            <td><?php echo $data['kode_surat']; ?></td>
                        </tr>
                    </table>
                </td>
                <td width="50%" style="text-align: left; padding: 25px 40px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="45%">Diterima Tanggal</td>
                            <td width="10%">:</td>
                            <td><?php echo date("d M Y", strtotime($data['tgl_terima'])); ?></td>
                        </tr>
                        <tr>
                            <td>No Agenda</td>
                            <td>:</td>
                            <td><?php echo $data['no_agenda']; ?></td>
                        </tr>
                        <tr>
                            <td>Sifat Surat</td>
                            <td>:</td>
                            <td><?php echo $data['sifat_surat']; ?></td>
                        </tr>
                        
                    </table>
                </td>
                
            </tr>
            <tr>
                <td colspan="2" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="100%">Hal :</td>
                        </tr>
                        <tr>
                          <td><?php echo $data['perihal']; ?></td>
                        </tr>
                        
                    </table>
                </td>
              
            </tr>
            <tr>
                 <td width="50%" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Diteruskan Kepada :</td>
                        </tr>
                        <tr>
                          <td style="padding-left: 10px;">Kepala DINAS <br>
                              PERHUBUNGAN <br>
                              LALU LINTAS <br>
                            </td>
                        </tr>
                       
                    </table>
                </td>
                 <td width="50%" style="text-align: left; padding: 25px 40px; padding-top: 5px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="25%">Dengan Hormat Harap :</td>
                        </tr>
                        <tr>
                          <td><input type="checkbox" class="minimal"> Tanggapan dan Saran <br>
                              <input type="checkbox"> Proses Lebih Lanjut <br>
                              <input type="checkbox"> Koordinasi / Konfirmasikan <br>
                              <input type="checkbox"> .......................... <br>
                            </td>
                        </tr>
                       
                    </table>
                </td>
            </tr>
           <tr>
                <td colspan="2" style="text-align: left; padding: 25px 40px; padding-top: 5px; padding-bottom: 150px;">
                    <table border="0" width="100%">
                        <tr>
                            <td width="100%">Catatan :</td>
                        </tr>
                        <tr>
                          <td><?php echo $data['ket_disposisi']; ?></td>
                        </tr>
                        
                    </table>
                </td>
              
            </tr>
            
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
   
    
  </section>
       

      </div>
    
    <div class="modal-footer">
                  
                 <a href='index.php?ref=lihat_surat_masuk.php&id_surat_masuk=<?php echo $data['id_surat_masuk'] ?>' class='btn btn-warning btn-lg'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat Surat</a>
              </div>
   
</div>
</div>