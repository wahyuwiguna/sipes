<?php 
    include 'koneksi.php';

    $nama = "Super Admin";
    $username = "super";
    $password1 = "super";
    $jabatan = "superadmin";
    $password = md5($password1);

    $query = "INSERT INTO tb_user(nama_user,username,password,jabatan) VALUES('".$nama."','".$username."', '".$password."', '".$jabatan."')";
    $sql = mysqli_query($koneksi, $query); 
    if($sql){ 
    
    echo "Berhasil";
    }
    else{
    
    echo "Gagal Mas";
    
  }


 ?>