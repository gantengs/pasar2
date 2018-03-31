			<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_toko'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	
    $show = mysql_query("SELECT a.nama_pasar, b.gambar, b.id_toko, b.nama_toko, b.nama_p, c.jenis_usaha FROM
			pasar a join toko b on a.id_pasar=b.id_pasar join usaha c on c.id_usaha=b.id_usaha WHERE id_toko='$id'");
    //cek apakah data dari hasil query ada atau tidak
    if(mysql_num_rows($show) == 0){
        
        //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
        echo '<script>window.history.back()</script>';
    }else{
        //jika data ditemukan, maka membuat variabel $data
        $data = mysql_fetch_assoc($show);   //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
    }
    ?>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon toko"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="?page=tampilT"><i class="halflings-icon edit"></i> All Data Toko</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update_T.php" method="POST">
						  <fieldset>
							<input type="hidden" name="id_toko" id="inputSuccess" value="<?php echo $data['id_toko']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Toko</label>
								<div class="controls">
								  <input type="text" name="nama_toko" value="<?php echo $data['nama_toko']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Pemilik</label>
								<div class="controls">
								  <input type="text" name="nama_p" value="<?php echo $data['nama_p']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Jenis Usaha</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_usaha">
										 <?php
										 $a="SELECT * from usaha order by jenis_usaha asc";
										 $sql=mysql_query($a);
										 while($data=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data['id_usaha']?>"><?php echo $data['jenis_usaha']?></option>
										 <?php
										 }
										 ?>
									</select>  
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" >Jualan di</label>
								<div class="controls">
									<select  required name="id_pasar">
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
								<label class="control-label" for="inputSuccess">Foto Toko</label>
								<div class="controls">
								  <input type="text" name="gambar" value="<?php echo $data['gambar']; ?>" id="inputSuccess">
								</div>
							</div>       		
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" value="tambah">Simpan Data</button>
							  <a href="?page=tampilT" class="btn">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->