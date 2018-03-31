<?php
include 'koneksi.php';

	$pasar	    = $_POST['id_pasar'];
    $nama_u     = $_POST['nama_u']; 
    $email      = $_POST['email']; 
    $password   = $_POST['password']; 
    $level      = $_POST['level']; 
	$telp		= $_POST['telp'];	
	$alamat		= $_POST['alamat'];

    $nama_file = rand(1000,100000)."-".$_FILES['datafile']['name'];
    $ukuran = $_FILES['datafile']['size'];
    
    if($nama_file=="nama_file"){
        echo "<script>window.alert('Data Anda belum lengkap');</script>";
        echo "<script>window.location='index.php';</script>";
    }else{
        $uploaddir = 'gambar_user/';
        $alamatfile = $uploaddir.$nama_file;
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
            $upload = mysql_query("INSERT into user values ('','$pasar','$email','$password','$level', '$nama_u','$telp', 'alamat', '$nama_file')");
		echo "<script>alert('Simpan Data Berhasil !')</script>";
		echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilU'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
    }
?>