
<?php
include "koneksi.php";
$id = $_GET['id_komoditi'];
$sql	= mysql_query("select * from jenis_komoditi where id_komoditi='$id'")  or die(mysql_error());
$data	= mysql_fetch_array($sql);
$lokasi = 'gambar_komoditi/';
$target=$lokasi.$data['gambar'];

$query = mysql_query("DELETE FROM jenis_komoditi WHERE id_komoditi='$id'");
if ($query){
	if(file_exists($target)){
		unlink($target);
	}
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilK'</script>";
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=tampilK'</script>";
}
?>