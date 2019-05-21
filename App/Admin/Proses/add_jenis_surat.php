<?php 
error_reporting(0);

include ('../../koneksi.php');


if (isset($_POST['add'])) {
    $jenis_surat = $_POST['jenis_surat'];
    

    $query = "INSERT INTO tb_jenis_surat(jenis_surat) VALUES('".$jenis_surat."')";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_jenis_surat.php&notif=berhasil");
    }
    else{
    header("location: ../index.php?ref=data_jenis_surat.php&notif=gagal");
}
}


 ?>