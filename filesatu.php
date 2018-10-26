<?php
session_start();
$_SESSION['nama']='NUSWANTORO';

//echo $_SESSION['nama'];
echo '<a href="filedua.php"> ke halaman dua</a><br>';
echo '<a href="filetiga.php"> ke halaman tiga</a>';
?>
