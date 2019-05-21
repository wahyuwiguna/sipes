<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIPES</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../Assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../Assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><p style="font-size: 50px; "><i class="fa fa-paper-plane" style="font-size: 50px;"></i> SIPES</p>
      <p style="font-size: 30px;">Sistem Pengarsipan Surat</p> </a>

  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
        
        <?php 
include ('koneksi.php');

if (isset($_POST['reset'])) {
    $email = $_POST['email'];

    $query1 = "SELECT * FROM tb_user WHERE email='".$email."'";
    $cek_email = mysqli_query($koneksi, $query1);
    $hitung = mysqli_num_rows($cek_email);
    if ($hitung > 0) {
        $isi = mysqli_fetch_array($cek_email);
        $id_user = $isi['id_user'];
        $username = $isi['username'];
        $password = md5($username);

        $query = "UPDATE tb_user SET password='".$password."' WHERE id_user='".$id_user."'";
        $sql = mysqli_query($koneksi, $query);
        echo "<p style='text-align:center; font-size:20px;'><b>Password Anda Berhasil Di Reset</b></p>  ";
        echo "<p>Silakan Login Menggunakan Username dan Password berikut:</p>";
        echo "<p style='text-align:center; font-size:25px;'>Username : $username</p>";
        echo "<p style='text-align:center; font-size:25px;'>Password : $username</p>";
        echo "<p style='text-align:center; font-size:15px;'><a href='index.php'>Kembali Login</a></p>";
    }else{
        echo "<p style='text-align:center; font-size:20px;'><b>Email Yang Anda Masukan Salah</b></p>";
        echo "<p style='text-align:center; font-size:15px;'><a href='reset_password.php'>Kembali Reset</a></p>";
    }

}

         ?>

  </div>
  <!-- /.login-box-body -->
  <br>
  <p style="text-align: center;">©2018-2019 All Rights Reserved. STIKI Indonesia</p>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../Assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../Assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../Assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
