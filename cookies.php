<?php 
//Contoh set cookie dengan nama=cart, nilai=2, expired=30 hari, path= /
setcookie("nama", "nus" , time() + (86400 * 30), "/"); 
// Catatan : 86400 = 1 hari (3600 detik x24jam) 
?>

<?php 
if(!isset($_COOKIE["nama"])) { 
 echo "Cookie tidak ditemukan!"; 
} else { 
 echo "Nilai untuk Cookie dengan nama cart = ". $_COOKIE["nama"]; 
} 
?>

<?php 
//Mengosongkan variabel super global $_COOKIE
unset($_COOKIE["nama"]);
//Mengubah expired cookie dengan nama=cart dengan waktu satu jam sebelumnya
//setcookie("nama", "" , time() - 3600); 
?>
