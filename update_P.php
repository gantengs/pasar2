<?php
include 'koneksi.php';
		
	$id			= $_POST['id_pasar'];
    $lat		= $_POST['lat'];
	$lng		= $_POST['lng'];
	$nama_t		= $_POST['nama_pasar'];	
	$no			= $_POST['telp'];	
	$alamat		= $_POST['alamat'];
	
	
    $nama_file = rand(1000,100000)."-".$_FILES['datafile']['name'];
    $ukuran = $_FILES['datafile']['size'];
    $cekgambar =$_FILES['datafile']['name'];
    
    if($cekgambar==""){
    	if ($_POST['datafile']==0) {
    		$upload = mysql_query("UPDATE pasar set lat='$lat', lng = '$lng', nama_pasar= '$nama_t', telp = '$no', alamat = '$alamat' where id_pasar = '$id'");
    	} 
            if ($upload) {
                echo "<script>alert('Ubah Data Berhasil !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";
            }else{
                echo "<script>alert('Ubah Data Gagal !')</script>";

            }
    }else{
        $uploaddir = 'gambar_pasar/';
        $alamatfile = $uploaddir.$nama_file;
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
    		$upload = mysql_query("UPDATE pasar set lat='$lat', lng = '$lng', nama_pasar= '$nama_t', telp = '$no', alamat = '$alamat', gambar_pasar='$nama_file' where id_pasar = '$id'");
		echo "<script>alert('Ubah Data Berhasil !')</script>";
		echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
    }
								//omomo

    if($cekgambar=="" ){
	
			//jika gambar lama tidak ada dan gambar baru juga tidak ditambahkan yang baru
			if($_POST['datafile']==0){
				
    		$upload = mysql_query("UPDATE pasar set lat='$lat', lng = '$lng', nama_pasar= '$nama_t', telp = '$no', alamat = '$alamat', gambar = '' where id_pasar = '$id'");
			
			//jika query upload sukses
			if($update){
                echo "<script>alert('Ubah Data Berhasil !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";	//membuat Link untuk kembali ke halaman tampil_data_bencana
		
			}else{
		
                echo "<script>alert('Ubah Data Gagal !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=ubahP'>";//membuat Link untuk kembali ke halaman edit
		
				}
				
			}
			//jika tidak melampirkan foto atas update sedangkan pada saat data awal sudah ada fotonya maka ia akan tetap menyimpan foto lama
			else{	
				//ambil nilai foto dari post lalu disimpan pada variabel foto
				$foto	= @$_POST['datafile'];
    		$upload = mysql_query("UPDATE pasar set lat='$lat', lng = '$lng', nama_pasar= '$nama_t', telp = '$no', alamat = '$alamat', gambar = '$nama_file' where id_pasar = '$id'");
			
			//jika query upload sukses
			if($update){
                echo "<script>alert('Ubah Data Berhasil !')</script>";
                echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";	//membuat Link untuk kembali ke halaman tampil_data_bencana
		
			}else{
		
			echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
			echo '<a href="udateP.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
				}
			}
    }else{
			
			//menghapus foto yg sebelumnya ada
			$sql	= mysql_query("select * from pasar where id_pasar='$id'")  or die(mysql_error());
			$data	= mysql_fetch_array($sql);
			$target=$data['gambar'];
			if(file_exists($target)){
			unlink($target);
			}
	//definisikan variabel file dan alamat file
        $uploaddir = 'gambar_pasar/';
        $alamatfile = $uploaddir.$nama_file;
        
		//periksa jika proses upload berjalan sukses
        
        if(move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile)){
            ?><?php
            
    		$upload = mysql_query("UPDATE pasar set lat='$lat', lng = '$lng', nama_pasar= '$nama_t', telp = '$no', alamat = '$alamat', gambar_pasar='$nama_file' where id_pasar = '$id'");
		echo "<script>alert('Ubah Data Berhasil !')</script>";
		echo "<meta http-equiv='refresh'content='1; url=index.php?page=tampilP'>";
        }else{
            echo "Proses upload gagal, kode error = ".$_FILES['location']['error'];
        }
        }else{
		
			//jika gagal
            echo 'Gagal menyimpan data dan gambar data! ';		//Pesan jika proses simpan gagal
			echo '<a href="tambah_pasar.php">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
        }
    }
?>