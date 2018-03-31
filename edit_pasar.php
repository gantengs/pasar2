<?php
    error_reporting(0);	//fungsi untuk menangani error yang terjadi
    require_once "koneksi.php";	//memanggil file koneksi
	
	if (!$_GET['id_pasar']=="") {	//jika isi id yang diambil dari button link ubah pada tampil_pengguna tidak kosong maka...
		$id = $_GET['id_pasar'];
		$sql = mysql_query("SELECT * FROM pasar where id_pasar='$id'")
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
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Edit Data Pasar</h2>
						<div class="box-icon">
							<a href="?page=tampilP" "><i class="halflings-icon edit"></i> All Data Pasar</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
					<div id="map" style="width:100%;height: 470px;"></div>
                            
						<form class="form-horizontal" action="update_P.php" method="POST">
						  <fieldset>
							<input type="hidden" name='id_pasar' id="inputSuccess" value="<?php echo $data['id_pasar']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Titik</label>
								<div class="controls">
								  <input type="text" required name='lat' value="<?php echo $data['lat']; ?>" readonly >
								  <input type="text" required name='lng' value="<?php echo $data['lng']; ?>" readonly >
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Pasar</label>
								<div class="controls">
								  <input type="text" required name='nama_pasar' id="inputSuccess" value="<?php echo $data['nama_pasar']; ?>" placeholder="contoh : Pasar Brayung">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">No Telp</label>
								<div class="controls">
								  <input type="text" required name='telp' id="inputSuccess" value="<?php echo $data['telp']; ?>" placeholder="contoh : 08577799955">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" >Alamat</label>
								<div class="controls col-sm-8">
								  <textarea name="alamat" id="inputSuccess"><?php echo $data['alamat']; ?></textarea>
								</div>
							</div>   
							<div class="control-group">
	  						<input type="hidden" name="foto" readonly value="<?php echo $data['gambar']; ?>"/>
							  <label class="control-label" for="fileInput">Foto Pasar</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name ="datafile" type="file">
							  </div>
							</div> 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" value="tambah">Simpan Data</button>
							  <a href="?page=tampilP" class="btn ">Batal</a>
							  
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->

			</div><!--/row-->