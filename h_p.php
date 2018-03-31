<?php
include "koneksi.php";
$id 	= $_GET['id_pasar'];
$sql	= mysql_query("select * from pasar where id_pasar='$id'")  or die(mysql_error());
$data	= mysql_fetch_array($sql);
$lokasi = 'gambar_pasar/';
$target=$lokasi.$data['gambar'];

$query = mysql_query("DELETE FROM pasar WHERE id_pasar='$id'");
if ($query){
	if(file_exists($target)){
		unlink($target);
	}
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilP'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus! dipakai Foreign Key data lain'); window.location = 'index.php?page=tampilP'</script>";	
}
?>