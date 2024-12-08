<?php 
session_start();// mengaktifkan session
session_destroy(); // menghapus semua session

//mengalihkan halaman sambil mengirim pesan logotu
header("location:halaman_admin.php?pesan=logout");
?>