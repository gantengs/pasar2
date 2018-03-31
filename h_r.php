
<?php
include "koneksi.php";
$id = $_GET['id_retribusi'];

$query = mysql_query("DELETE FROM retribusi WHERE id_retribusi='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?page=tampilR'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?page=tampilR'</script>";	
}
?>