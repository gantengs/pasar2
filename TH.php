<?php
	
	//inlcude atau memasukkan file koneksi ke database
	require_once "koneksi.php";	//memanggil file koneksi
	
	// mengambil nilai tgl dari form tambah_harga.php
	$tgl		= $_POST['tgl'];
	// mengubah Format tanggal dari m/d/y ke Y/M/D (tgl -> $date kembali -> $tgl)
	$date = DateTime::createFromFormat('m/d/Y', $tgl);
	$tgl = date_format($date, 'Y-m-d');
	
	// mengambil nilai id_tempat dari form tambah_harga.php
	$t			= $_POST['id_tempat'];
	// unset ini untuk mengeluarkan tgl dan id_tempat dari array _POST
	unset($_POST['tgl']);
	unset($_POST['id_tempat']);
	// implode adalah untuk menggabungkan nilai array yg ada di _POST kecuali tgl dan id_tempat karena telah dikeluarkan
	$data = implode(",",$_POST);
	//melakukan query dengan perintah insert ke database dengan kondisi
	$update = mysql_query("Insert into harga_komoditi values ('','$t','$tgl',".$data.") ") or die(mysql_error());
	
	//jika query update sukses
	if($update){
	echo "<script>alert('Simpan Data Berhasil !')</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";	//membuat Link untuk kembali ke halaman edit
	}else{
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
	}
?>