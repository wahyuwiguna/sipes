<?php 
error_reporting(0);

include ('../../koneksi.php');


if (isset($_POST['add'])) {
    $nama_user = $_POST['nama_user'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat_user = $_POST['alamat_user'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $password1 = $_POST['password'];
    $jabatan = $_POST['jabatan'];
    $password = md5($password1);

    $query = "INSERT INTO tb_user(nama_user, jenis_kelamin, alamat_user, email, no_hp,username, password, jabatan) VALUES('".$nama_user."','".$jenis_kelamin."','".$alamat_user."','".$email."','".$no_hp."','".$username."','".$password."','".$jabatan."')";
    $sql = mysqli_query($koneksi, $query); 

    if($sql){ 
    
    header("location: ../index.php?ref=data_user.php&notif=berhasil");
    }
    else{
    header("location: ../index.php?ref=data_user.php&notif=gagal");
}
}


 ?>