<?php
include "koneksi.php";
$id = $_GET['id_toko'];
$sql	= mysql_query("select * from toko where id_toko='$id'")  or die(mysql_error());
$data	= mysql_fetch_array($sql);
$lokasi = 'gambar_toko/';
$target=$lokasi.$data['gambar'];

$query = mysql_query("DELETE FROM toko WHERE id_toko='$id'");
if ($query){
	if(file_exists($target)){
		unlink($target);
	}
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilT'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=tampilT'</script>";	
}
?>