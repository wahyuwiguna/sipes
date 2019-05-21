<?php
include "../koneksi.php";
$tahun=$_GET['tahun'];
$bulan=$_GET['bulan'];

?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detil Surat Keluar Bulan <?php 
          switch ($bulan) {
            case '1':
              echo "Januari";
              break;
            case '2':
              echo "Februari";
              break;
            case '3':
              echo "Maret";
              break;
            case '4':
              echo "April";
              break;
            case '5':
              echo "Mei";
              break;
            case '6':
              echo "Juni";
              break;
            case '7':
              echo "Juli";
              break;
            case '8':
              echo "Agustus";
              break;
            case '9':
              echo "September";
              break;
            case '10':
              echo "Oktober";
              break;
            case '11':
              echo "November";
              break;
            case '12':
              echo "Desember";
              break;
            default:
              # code...
              break;
          }
         ?>
         <?php echo " Tahun $tahun"; ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-xs-6">
          <div class="box box-primary">
            <!-- <div class="box-header">
               <a target="_blank" href="Pages/lihat_detil_sk_print.php?bulan=<?php echo $bulan; ?>&tahun=<?php echo $tahun; ?>" class="btn btn-warning pull-left"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Cetak</a>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th style="text-align: center;" width="20px">No</th>
                  <th style="text-align: center;">Jenis Surat</th>
                  <th style="text-align: center;">Nomor Surat</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                
<?php 
  $query_sk = "SELECT `tb_jenis_surat`.`jenis_surat`, `tb_surat_keluar`.`id_surat_keluar`, `tb_surat_keluar`.`no_surat` FROM `tb_surat_keluar` 
INNER JOIN `tb_jenis_surat` ON `tb_surat_keluar`.`id_jenis` = `tb_jenis_surat`.`id_jenis` 
WHERE YEAR(`tb_surat_keluar`.`tgl_kirim`)= $tahun 
AND MONTH(`tb_surat_keluar`.`tgl_kirim`) = $bulan ORDER BY `tb_jenis_surat`.`jenis_surat` ASC";
  $sql_sk = mysqli_query($koneksi, $query_sk); 
  $tot_semua = 0;
   $nomor = 0;
  while ($data_sk = mysqli_fetch_array($sql_sk)) {
    echo "<tr>";
    $nomor = $nomor + 1;
    echo "<td style='text-align:center;'>".$nomor."</td>";
    echo "<td>".$data_sk['jenis_surat']."</td>";
    echo "<td>".$data_sk['no_surat']."</td>";
    
  ?>
   <td style="text-align: center;">
   <a href='index.php?ref=lihat_surat_keluar.php&id_surat_keluar=<?php echo $data_sk['id_surat_keluar'] ?>' class='btn btn-primary btn-xs'><i class='fa fa-eye' aria-hidden='true'></i>&nbsp;Lihat</a>
   </td>
   <?php
    echo "</tr>";
  }

 ?>
              
                

                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>



        
      </div>



    </section>


