<?php
    error_reporting(0);	//fungsi untuk menangani error yang terjadi
    require_once "koneksi.php";	//memanggil file koneksi
	
	if (!$_GET['id_usaha']=="") {	//jika isi id yang diambil dari button link ubah pada tampil_pengguna tidak kosong maka...
		$id = $_GET['id_usaha'];
		$sql = mysql_query("SELECT * FROM usaha where id_usaha='$id'")
			or die (mysql_error());	//perintah query untuk menampilkan data dari tbuser dimana field email sesuai dengan isi dari id
		if(mysql_num_rows($sql) == 0){
        
        //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
        echo '<script>window.history.back()</script>';
        
    }else{
		$data = mysql_fetch_array($sql);                  
	}
	}
?>

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah Data Jenis Jualan</h2>
						<div class="box-icon">
							<a href="?page=tampilJ" "><i class="halflings-icon edit"></i> All Data Jenis Jualan</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
					
						<form class="form-horizontal" action="update_J.php" method="POST">
						  <fieldset>
							<input type="hidden" name="id_usaha" id="inputSuccess" value="<?php echo $data['id_usaha']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Jenis Jualan</label>
								<div class="controls">
								  <input type="text" name="jenis_jualan" id="inputSuccess" value="<?php echo $data['jenis_usaha']; ?>" placeholder="contoh : buah-buahan" >
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary" value="tambah">Simpan Data</button>
								<a href="?page=tampilJ" class="btn ">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->

			</div><!--/row-->