<?php
include 'koneksi.php';

    $pasar        = $_POST['id_pasar'];
    $toko        = $_POST['nama_toko'];
    $pemilik     = $_POST['nama_p']; 
    $usaha         = $_POST['id_usaha'];
    
    
    $nama_file = rand(1000,100000)."-".$_FILES['datafile']['name'];
    $ukuran = $_FILES['datafile']['size'];
    
    if($nama_file==""){
        echo "<script>window.alert('Data Anda belum lengkap');</script>";
        echo "<script>window.location='index.php';</script>";
    }else{
        $uploaddir = 'gambar_toko/';
        $alamatfile = $uploaddir.$nama_file;
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
            $upload = mysql_query("INSERT into toko values ('','$pasar','$usaha','$toko','$pemilik', '$nama_file')");
        echo "<script>alert('Simpan Data Berhasil !')</script>";
        echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilT'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
    }
?>