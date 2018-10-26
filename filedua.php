<?php
session_start();
echo "Halo ".$_SESSION['nama']. " selamat datang di halaman dua";
echo '<a href="filetiga.php"> ke halaman tiga</a>';
?>
