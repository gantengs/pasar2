<?php
    error_reporting(0);	//fungsi untuk menangani error yang terjadi
    require_once "koneksi.php";	//memanggil file koneksi
	
	if (!$_GET['id_user']=="") {	//jika isi id yang diambil dari button link ubah pada tampil_pengguna tidak kosong maka...
		$id = $_GET['id_user'];
		$sql = mysql_query("SELECT * FROM user where id_user='$id'")
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
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Edit Data User</h2>
						<div class="box-icon">
							<a href="?page=tambahU" "><i class="halflings-icon edit"></i>Tambah Data User</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
                            
						<form class="form-horizontal" action="update_U.php" method="POST">
						  <fieldset>
							<input type="hidden" name='id_pasar' id="inputSuccess" value="<?php echo $data['id_user']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama User</label>
								<div class="controls">
								  <input type="text" name="nama_u" value="<?php echo $data['nama_u']; ?>" required id="inputSuccess" placeholder="contoh : Wahyu Dwi Pranata">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Bekerja di</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_pasar">
										 <?php
										 $a="SELECT * from pasar order by nama_pasar asc";
										 $sql=mysql_query($a);
										 while($data1=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data1['id_pasar']?>"><?php echo $data1['nama_pasar']?></option>
										 <?php
										 }
										 ?>
									</select>  
								</div>
							  </div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">No Telp</label>
								<div class="controls">
								  <input type="text" name="telp" value="<?php echo $data['telp']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" >Alamat</label>
								<div class="controls col-sm-6">
								  <textarea name="alamat" id="inputSuccess"><?php echo $data['alamat']; ?></textarea>
								</div>
							</div>    
							<div class="control-group success">
								<label class="control-label" >Foto</label>
								<div class="controls col-sm-6">
								  <input type="text" name="foto" id="inputSuccess" value="">
								</div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" value="tambah">Simpan Data</button>
							  <a href="?page=tampilU" class="btn btn-primary m-t-15 waves-effect">Batal</a>
							  
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->

			</div><!--/row-->