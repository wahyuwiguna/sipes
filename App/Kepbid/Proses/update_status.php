<?php 
error_reporting(0);

include ('../../koneksi.php');

$id_surat_masuk = $_GET['id_surat_masuk'];

$query = "UPDATE tb_surat_masuk SET status_disposisi='1' WHERE id_surat_masuk='".$id_surat_masuk."'";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_surat_masuk.php&notif=berhasil");
    }
    else{
    header("location: ../index.php?ref=data_surat_masuk.php&notif=gagal");
}



 ?>