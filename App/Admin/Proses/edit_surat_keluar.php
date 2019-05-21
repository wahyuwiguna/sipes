<?php 
error_reporting(0);
session_start();

include ('../../koneksi.php');

$id_surat_keluar = $_GET['id_surat_keluar']; 
$tgl_surat = $_POST['tgl_surat'];  
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
$tgl_kirim = $_POST['tgl_kirim'];
$pengirim = $_POST['pengirim'];


if (isset($_POST['ubah_foto'])) {
    $nama_file = $_FILES['scan_surat']['name']; // Menyimpan nama file ke variabel $nama_file
    // Rename nama fotonya dengan menambahkan tanggal dan jam upload
    $nama_file_baru = date('dmYHis').$nama_file;
    $format = pathinfo($nama_file, PATHINFO_EXTENSION); // Mendapatkan format file
    if ($format == "pdf") {
        $file_asal = $_FILES['scan_surat']['tmp_name'];
        $file_tujuan = "../Upload/Surat_Keluar/".$nama_file_baru;

        if (move_uploaded_file($file_asal, $file_tujuan)) {
             $q_id = "SELECT * FROM tb_surat_keluar WHERE id_surat_keluar='".$id_surat_keluar."'";
            $sql_id = mysqli_query($koneksi, $q_id); // Eksekusi/Jalankan query dari variabel $query
            $data_id = mysqli_fetch_array($sql_id); // Ambil data dari hasil eksekusi $sql
           if (is_file("../Upload/Surat_Keluar/".$data_id['scan_surat'])) {
               unlink("../Upload/Surat_Keluar/".$data_id['scan_surat']); // Hapus file foto sebelumnya yang ada di folder images
               $query = "UPDATE tb_surat_keluar SET tgl_surat='".$tgl_surat."', no_surat='".$no_surat."', id_user='".$id_user."', tipe_surat='".$tipe_surat."', id_jenis='".$id_jenis."',indeks='".$indeks."',no_agenda='".$no_agenda."',kode_surat='".$kode_surat."',sifat_surat='".$sifat_surat."',tujuan_surat='".$tujuan_surat."',perihal='".$perihal."', ket_surat='".$ket_surat."', tgl_kirim='".$tgl_kirim."', pengirim='".$pengirim."', scan_surat='".$nama_file_baru."' WHERE id_surat_keluar='".$id_surat_keluar."'";
                    $sql = mysqli_query($koneksi, $query);    
                    if($sql){ 
                    
                    header("location: ../index.php?ref=data_surat_keluar.php&notif=update");
                    }
                    else{
                    header("location: ../index.php?ref=data_surat_keluar.php&notif=gagal");
                }
           }
        }
    }else{
        echo "<script>
           alert('Format Yang Anda Upload Salah !! Silakan Upload File Gambar Dengan Format .jpg, .jpeg, .png');
            window.location.href='$_back'
          </script>";
    }
}else{
    $query = "UPDATE tb_surat_keluar SET tgl_surat='".$tgl_surat."', no_surat='".$no_surat."', id_user='".$id_user."', tipe_surat='".$tipe_surat."', id_jenis='".$id_jenis."',indeks='".$indeks."',no_agenda='".$no_agenda."',kode_surat='".$kode_surat."',sifat_surat='".$sifat_surat."',tujuan_surat='".$tujuan_surat."',perihal='".$perihal."', ket_surat='".$ket_surat."', tgl_kirim='".$tgl_kirim."', pengirim='".$pengirim."' WHERE id_surat_keluar='".$id_surat_keluar."'";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_surat_keluar.php&notif=update");
    }
    else{
    header("location: ../index.php?ref=data_surat_keluar.php&notif=gagal");
}
}

// if (isset($_POST['update'])) {
//     $id_surat_masuk = $_GET['id_surat_masuk'];    
//     $tgl_surat = $_POST['tgl_surat'];    
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
//     $tgl_terima = $_POST['tgl_terima'];
//     $penerima = $_POST['penerima'];

//     $query = "UPDATE tb_surat_masuk SET tgl_surat='".$tgl_surat."', no_surat='".$no_surat."', tipe_surat='".$tipe_surat."', id_jenis='".$id_jenis."',indeks='".$indeks."',no_agenda='".$no_agenda."',kode_surat='".$kode_surat."',sifat_surat='".$sifat_surat."',asal_surat='".$asal_surat."',perihal='".$perihal."', ket_surat='".$ket_surat."', tgl_terima='".$tgl_terima."', penerima='".$penerima."' WHERE id_surat_masuk='".$id_surat_masuk."'";
//     $sql = mysqli_query($koneksi, $query); 

//     if($sql){ 
    
//     header("location: ../index.php?ref=data_surat_masuk.php&notif=update");
//     }
//     else{
//     header("location: ../index.php?ref=data_surat_masuk.php&notif=gagal");
// }
// }


 ?>