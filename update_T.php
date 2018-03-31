<?php

	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id_toko'];
	$id_pasar	= $_POST['id_pasar'];	//membuat variabel $id dan datanya dari inputan hidden id
	$id_usaha	= $_POST['id_usaha'];
	$nama_toko	= $_POST['nama_toko'];
	$nama_p		= $_POST['nama_p'];	
	$gambar		= $_POST['gambar'];
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE toko SET id_pasar='$id_pasar',id_usaha='$id_usaha', nama_toko='$nama_toko', 
	nama_p='$nama_p', gambar='$gambar' WHERE id_toko='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){	
	echo "<script>alert('Ubah Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampilT'>";	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="?page=editP&id_pasar='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
?>