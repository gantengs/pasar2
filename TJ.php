<?php
	
	//inlcude atau memasukkan file koneksi ke database
	require_once "koneksi.php";	//memanggil file koneksi
	
	
	$lat		= $_POST['jenis_usaha'];
	
	$update = mysql_query("Insert into usaha values ('','$lat') ") or die(mysql_error());
	
	//jika query update sukses
	if($update){
	echo "<script>alert('Simpan Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilJ'>";
	}else{
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo "<meta http-equiv='refresh'content='1; url=index.php?page=tambahJ'>";
	}
?>