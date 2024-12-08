<?php 
session_start();
//menghubungkan dengan koneksi
$query=new mysqli('localhost','root','','bencana'); // dibuat seperti ini dan tidak perlu file koneksi sendiri

//menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($query,"select *from admin where username='$username'
and password='$password'") or die(mysqli_eror($query));

//menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:session.php"); //halaman profil //akan terus dibawa ke halaman yang masih membutuhkan login
} else{
    header("location:halaman_admin.php?pesan=gagal"); // kembali ke halaman login
}
?>