<?php
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

include ('../../koneksi.php');
$_back = "".$_SERVER['HTTP_REFERER'];

$query_u = "SELECT * FROM `tb_user` WHERE `jabatan`='kepbid' AND `status`=1";
    $sql_u = mysqli_query($koneksi, $query_u);
    $data_u = mysqli_fetch_array($sql_u);

$email_kepbid = $data_u['email'];

// $id_surat_masuk = $_GET['id_surat_masuk'];

//     $query = "SELECT * FROM `tb_surat_masuk` INNER JOIN `tb_jenis_surat`
//             WHERE `tb_surat_masuk`.`id_jenis` = `tb_jenis_surat`.`id_jenis` AND id_surat_masuk='$id_surat_masuk'";
//     $sql = mysqli_query($koneksi, $query);
//     $data = mysqli_fetch_array($sql);

// Konfigurasi SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'yuwinshop18@gmail.com';
$mail->Password = 'Wahyuindah18';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('yuwinshop18@gmail.com', 'Dinas Perhubungan Kota Denpasar');
$mail->addReplyTo('yuwinshop18@gmail.com', 'Dinas Perhubungan Kota Denpasar');

// // Menambahkan penerima
$mail->addAddress($email_kepbid);

// // Menambahkan beberapa penerima
// //$mail->addAddress('penerima2@contoh.com');
// //$mail->addAddress('penerima3@contoh.com');

// // Menambahkan cc atau bcc 
// // $mail->addCC('cc@contoh.com');
// // $mail->addBCC('bcc@contoh.com');

// Subjek email
$mail->Subject = 'Notifikasi Surat Masuk Baru';

// // Mengatur format email ke HTML
$mail->isHTML(true);

// // Konten/isi email
$mailContent = "<h1>Surat Masuk Baru</h1>
    <p>Anda memiliki surat masuk baru untuk dibaca segera !</p>
    <p>Mohon dibuka surat tersebut pada SPS</p>
    <p>Terima Kasih !</p>";

$mail->Body = $mailContent;

// // Menambahakn lampiran
// // $mail->addAttachment('lmp/file1.pdf');
// // $mail->addAttachment('lmp/file2.png', 'nama-baru-file2.png'); //atur nama baru

// // Kirim email
if(!$mail->send()){
    echo "<script>
           alert('Internal Error !! Email Gagal Terkirim');
            window.location.href='$_back'
          </script>";
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo "<script>
           alert('Notifikasi Email Berhasil Terkirim !!');
            window.location.href='$_back'
          </script>";
}