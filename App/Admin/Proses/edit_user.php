<?php 
error_reporting(0);

include ('../../koneksi.php');


if (isset($_POST['update'])) {
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_user = $_POST['alamat_user'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];

    $query = "UPDATE tb_user SET nama_user='".$nama_user."', jenis_kelamin='".$jenis_kelamin."', alamat_user='".$alamat_user."', email='".$email."',no_hp='".$no_hp."', jabatan='".$jabatan."', status='".$status."' WHERE id_user='".$id_user."'";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_user.php&notif=update");
    }
    else{
    header("location: ../index.php?ref=data_user.php&notif=gagal");
}
}


 ?>