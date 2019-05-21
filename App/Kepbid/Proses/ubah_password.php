<?php 
    include "../../koneksi.php";
    $id_user = $_GET['id_user'];
    $pwd_lama2 = $_POST['pwd_lama'];
    $pwd_lama = md5($pwd_lama2);
    $pwd_baru2 = $_POST['pwd_baru'];
    $pwd_baru = md5($pwd_baru2);
    $pwd_confirm2 = $_POST['pwd_confirm'];
    $pwd_confirm = md5($pwd_confirm2);

    $query_data = "SELECT password FROM tb_user WHERE id_user='".$id_user."'";
    $sql = mysqli_query($koneksi, $query_data);
    $data = mysqli_fetch_array($sql);

    if ($pwd_baru != $pwd_confirm) {
        echo "
          <script>
           alert('Terjadi Kesalahan, Confirm Password Harus Sama Dengan Password Baru !!!');
            window.location.href='../index.php?ref=profile.php&id_user=".$id_user."'
          </script>
          ";

    }else{
        if ($pwd_lama == $data['password']) {

            $query_update = "UPDATE tb_user SET password='".$pwd_baru."' WHERE id_user=$id_user";
            $sql2 = mysqli_query($koneksi, $query_update); 

            if($sql2){ 
           echo "
          <script>
           alert('Anda Berhasil Mengubah Password, Silakan Login Kembali !!');
            window.location.href='../../logout.php'
          </script>
          ";
            }
            else{
            header("location: ../index.php?ref=profile.php");
            }
        }else{
          echo "
          <script>
           alert('Terjadi Kesalahan. Pasword Lama Anda Salah !!');
            window.location.href='../index.php?ref=profile.php'
          </script>
          ";
        }
    }

 ?>