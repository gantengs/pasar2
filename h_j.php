
<?php
include "koneksi.php";
$id = $_GET['id_usaha'];

$query = mysql_query("DELETE FROM usaha WHERE id_usaha='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilJ'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=tampilJ'</script>";	
}
?>