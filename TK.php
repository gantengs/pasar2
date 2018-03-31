<?php

	
	//inlcude atau memasukkan file koneksi ke database
	require_once "koneksi.php";	//memanggil file koneksi
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$id			= $_POST['id_tempat'];	//membuat variabel $id dan datanya dari inputan hidden id
	$tgl		= $_POST['tgl'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	
			$no=1;
			$sq = mysql_query("SELECT COLUMN_NAME as komoditas FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$database' AND TABLE_NAME = 'komoditi' and COLUMN_NAME <> 'id_pasar' and COLUMN_NAME <> 'id_catat' and COLUMN_NAME <> 'tgl'");
			while ($s=mysql_fetch_array($sq)){
				
			$".echo $s['komoditas']."		= $_POST['$s['komoditas']'];	
			
			}
	
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("Insert into kecamatan values ('$id','$nama','$tgl','$no','$alamat') ") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
	echo "<script>alert('Simpan Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh' content='0; url='>";	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit_kecamatan.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}
?>