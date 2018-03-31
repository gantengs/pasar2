<?php
include "koneksi.php";
$id = $_GET['id_user'];
$sql	= mysql_query("select * from user where id_user='$id'")  or die(mysql_error());
$data	= mysql_fetch_array($sql);
$lokasi = 'gambar_user/';
$target=$lokasi.$data['foto'];

$query = mysql_query("DELETE FROM user WHERE id_user='$id'");
if ($query){
	if(file_exists($target)){
		unlink($target);
	}
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilU'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=tampilU'</script>";
}
?>