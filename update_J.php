<?php

	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id_usaha'];	//membuat variabel $id dan datanya dari form inputan id edti_jualan.php
	$lat		= $_POST['jenis_jualan'];
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE usaha SET jenis_usaha='$lat' WHERE id_usaha='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){	
	echo "<script>alert('Ubah Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampilJ'>";	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="?page=editJ&id_usaha='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
?>