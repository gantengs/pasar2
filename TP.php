<?php
include 'koneksi.php';

    $lat		= $_POST['lat'];
	$lng		= $_POST['lng'];
	$nama_t		= $_POST['nama_pasar'];	
	$no			= $_POST['telp'];	
	$alamat		= $_POST['alamat'];
	
	
    $nama_file = rand(1000,100000)."-".$_FILES['datafile']['name'];
    $ukuran = $_FILES['datafile']['size'];
    $cekgambar =$_FILES['datafile']['name'];
    
    if($cekgambar==""){
            $upload = mysql_query("INSERT into pasar values ('','$lat','$lng','$nama_t','$no','$alamat', '')");
            if ($upload) {
                echo "<script>alert('Simpan Data Berhasil !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";
            }else{
                echo "<script>alert('Simpan Data Gagal !')</script>";

            }
    }else{
        $uploaddir = 'gambar_pasar/';
        $alamatfile = $uploaddir.$nama_file;
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
            $upload = mysql_query("INSERT into pasar values ('','$lat','$lng','$nama_t','$no','$alamat', '$nama_file')");
		echo "<script>alert('Simpan Data Berhasil !')</script>";
		echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
    }
?>