<?php

	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_toko		= $_POST['id_toko'];
	$tanggal		= $_POST['tanggal'];	//membuat variabel $id dan datanya dari inputan hidden id
	$jumlah			= $_POST['jumlah'];	//membuat variabel $id dan datanya dari inputan hidden id
	$id				= $_POST['id_retribusi'];
	$date = DateTime::createFromFormat('m/d/Y', $tanggal);
	$tgl = date_format($date, 'Y-m-d');

	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE retribusi SET id_toko='$id_toko',tanggal='$tgl', jumlah='$jumlah' WHERE id_retribusi='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){	
	echo "<script>alert('Ubah Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=tampilR'>";	//membuat Link untuk kembali ke halaman edit
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="?page=editR&id_retribusi='.$id1.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
?>