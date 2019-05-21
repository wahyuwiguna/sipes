<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_user where username='$username' AND password='$password' AND status=1");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

$isi = mysqli_fetch_array($data);


if($cek > 0){
    if ($isi['jabatan']=='admin' OR $isi['jabatan']=='superadmin') {
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $isi['id_user'];
        $_SESSION['nama_user'] = $isi['nama_user'];
        $_SESSION['jenis_kelamin'] = $isi['jenis_kelamin'];
        $_SESSION['email'] = $isi['email'];
        $_SESSION['alamat_user'] = $isi['alamat_user'];
        $_SESSION['no_hp'] = $isi['no_hp'];
        $_SESSION['jabatan'] = $isi['jabatan'];
        $_SESSION['status_session'] = "login_admin";
     header("location:Admin/index.php?ref=data_surat_masuk.php");
    
    }elseif ($isi['jabatan']=='kepbid') {
        $_SESSION['username'] = $username;
        $_SESSION['id_user'] = $isi['id_user'];
        $_SESSION['nama_user'] = $isi['nama_user'];
        $_SESSION['jenis_kelamin'] = $isi['jenis_kelamin'];
        $_SESSION['email'] = $isi['email'];
        $_SESSION['alamat_user'] = $isi['alamat_user'];
        $_SESSION['no_hp'] = $isi['no_hp'];
        $_SESSION['jabatan'] = $isi['jabatan'];
        $_SESSION['status_session'] = "login_kepbid";
        header("location:Kepbid/index.php?ref=data_surat_masuk.php");
    }
    
}else{
    echo "<script>alert('Login Gagal !! Periksa Kembali Username atau Password Anda');window.location.href='index.php'</script>";
}
?>
