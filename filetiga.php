<?php
error_reporting(-1);
session_start();
echo 'Halo'.$_SESSION['nama'].'selamat datang';
echo session_save_path();
session_unset();
session_destroy();
//Hasil nya tidak ada(kosong)

echo $_SESSION['nama'];
?>
