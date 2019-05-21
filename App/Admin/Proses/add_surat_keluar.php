 <?php 
error_reporting(0);
session_start();

include ('../../koneksi.php');

$_back = "".$_SERVER['HTTP_REFERER'];

 $tgl_surat2 = $_POST['tgl_surat'];
    if ($tgl_surat2=='') {
        $tgl_surat = '0000-00-00';
    }else{
        $tgl_surat = date("Y-m-d", strtotime($tgl_surat2));
    }
    
    $id_user = $_SESSION['id_user'];
    $no_surat = $_POST['no_surat'];
    $tipe_surat = $_POST['tipe_surat'];
    $id_jenis = $_POST['id_jenis'];
    $indeks = $_POST['indeks'];
    $no_agenda = $_POST['no_agenda'];
    $kode_surat = $_POST['kode_surat'];
    $sifat_surat = $_POST['sifat_surat'];
    $tujuan_surat = $_POST['tujuan_surat'];
    $perihal = $_POST['perihal'];
    $ket_surat = $_POST['ket_surat'];
    $tgl_kirim2 = $_POST['tgl_kirim'];
    $tgl_kirim = date("Y-m-d", strtotime($tgl_kirim2));
    $pengirim = $_POST['pengirim'];
    

if (isset($_POST['add'])) {
     $error = $_FILES['file']['error']; // Menyimpan jumlah error ke variabel $error

     //validasi error
     if ($error == 0) {
          $ukuran_file = $_FILES['scan_surat']['size']; // Menyimpan ukuran file ke variabel $ukuran_file

          if ($ukuran_file <= 5000000) {
            $nama_file = $_FILES['scan_surat']['name']; // Menyimpan nama file ke variabel $nama_file
            // Rename nama fotonya dengan menambahkan tanggal dan jam upload
            $nama_file_baru = date('dmYHis').$nama_file;
            $format = pathinfo($nama_file, PATHINFO_EXTENSION); // Mendapatkan format file
           
            // Validasi format
            if ($format == "pdf") {
                $file_asal = $_FILES['scan_surat']['tmp_name'];
                $file_tujuan = "../Upload/Surat_Keluar/".$nama_file_baru;

                //upload
                if (move_uploaded_file($file_asal, $file_tujuan)) {
                     $query = "INSERT INTO tb_surat_keluar(tgl_surat,id_user,no_surat,tipe_surat,id_jenis,indeks,no_agenda,kode_surat, sifat_surat, tujuan_surat,perihal,ket_surat,tgl_kirim,pengirim, scan_surat) VALUES('".$tgl_surat."','".$id_user."','".$no_surat."','".$tipe_surat."','".$id_jenis."','".$indeks."','".$no_agenda."','".$kode_surat."','".$sifat_surat."','".$tujuan_surat."','".$perihal."','".$ket_surat."','".$tgl_kirim."','".$pengirim."','".$nama_file_baru."')";
                        $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
                    if ($sql) {
                        // $query_idmax = "SELECT MAX(`id_surat_masuk`) AS idmax FROM `tb_surat_masuk`";
                        // $sql_idmax = mysqli_query($koneksi, $query_idmax);
                        // $d_idmax = mysqli_fetch_array($sql_idmax);
                        // $id_surat_masuk = $d_idmax['idmax'];
                        header("location: ../index.php?ref=data_surat_keluar.php&notif=berhasil");
                    }else{
                        header("location: ../index.php?ref=data_surat_keluar.php&notif=gagal");
                    }
               } 
            }else{
                echo "<script>
           alert('Format Yang Anda Upload Salah !! Silakan Upload File Dengan Format .pdf);
            window.location.href='$_back'
          </script>";
              
            }
          }
     }
}



// if (isset($_POST['add'])) {
//     $tgl_surat2 = $_POST['tgl_surat'];
//     if ($tgl_surat2=='') {
//         $tgl_surat = '0000-00-00';
//     }else{
//         $tgl_surat = date("Y-m-d", strtotime($tgl_surat2));
//     }
    
//     $id_user = $_SESSION['id_user'];
//     $no_surat = $_POST['no_surat'];
//     $tipe_surat = $_POST['tipe_surat'];
//     $id_jenis = $_POST['id_jenis'];
//     $indeks = $_POST['indeks'];
//     $no_agenda = $_POST['no_agenda'];
//     $kode_surat = $_POST['kode_surat'];
//     $sifat_surat = $_POST['sifat_surat'];
//     $asal_surat = $_POST['asal_surat'];
//     $perihal = $_POST['perihal'];
//     $ket_surat = $_POST['ket_surat'];
//     $tgl_terima2 = $_POST['tgl_terima'];
//     $tgl_terima = date("Y-m-d", strtotime($tgl_terima2));
//     $penerima = $_POST['penerima'];
    

//     $query = "INSERT INTO tb_surat_masuk(tgl_surat,no_surat,tipe_surat,id_jenis,indeks,no_agenda,kode_surat, sifat_surat, asal_surat,perihal,ket_surat,tgl_terima,penerima) VALUES('".$tgl_surat."','".$no_surat."','".$tipe_surat."','".$id_jenis."','".$indeks."','".$no_agenda."','".$kode_surat."','".$sifat_surat."','".$asal_surat."','".$perihal."','".$ket_surat."','".$tgl_terima."','".$penerima."')";
//     $sql = mysqli_query($koneksi, $query); 

//     if($sql){ 
//     $query_idmax = "SELECT MAX(`id_surat_masuk`) AS idmax FROM `tb_surat_masuk`";
//     $sql_idmax = mysqli_query($koneksi, $query_idmax);
//     $d_idmax = mysqli_fetch_array($sql_idmax);
//     $id_surat_masuk = $d_idmax['idmax'];
//     header("location: ../index.php?ref=disposisi_surat_masuk.php&id_surat_masuk=$id_surat_masuk");
//     }
//     else{
//     header("location: ../index.php?ref=data_surat_masuk.php&notif=gagal");
// }
// }


 ?>