<?php
include 'koneksi.php';
 
	$komoditi	= $_POST['jenis_komoditi'];	
	$satuan		= $_POST['satuan'];

    $nama_file = rand(1000,100000)."-".$_FILES['datafile']['name'];
    $ukuran = $_FILES['datafile']['size'];
    
    if($nama_file=="nama_file"){
        echo "<script>window.alert('Data Anda belum lengkap');</script>";
        echo "<script>window.location='index.php';</script>";
    }else{
        $uploaddir = 'gambar_komoditi/';
        $alamatfile = $uploaddir.$nama_file;
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
            $upload = mysql_query("INSERT into jenis_komoditi values ('','$komoditi','$satuan', '$nama_file')");
            $query = mysql_query("ALTER TABLE harga_komoditi ADD $komoditi varchar(50)");

                echo "<script>alert('Simpan Data Berhasil !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilK'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
    }
?>