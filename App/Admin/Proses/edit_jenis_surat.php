<?php 
error_reporting(0);

include ('../../koneksi.php');


if (isset($_POST['update'])) {
    $id_jenis = $_POST['id_jenis'];
    $jenis_surat = $_POST['jenis_surat'];

    $query = "UPDATE tb_jenis_surat SET jenis_surat='".$jenis_surat."' WHERE id_jenis='".$id_jenis."'";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_jenis_surat.php&notif=update");
    }
    else{
    header("location: ../index.php?ref=data_jenis_surat.php&notif=gagal");
}
}


 ?>