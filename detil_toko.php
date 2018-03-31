			<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_toko'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	
    $show = mysql_query("SELECT a.nama_pasar, b.gambar, b.id_toko, b.nama_toko, b.gambar, b.nama_p, c.jenis_usaha FROM
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
						<h2><i class="halflings-icon toko"></i><span class="break"></span>Detail Data Toko</h2>
						<div class="box-icon">
							<a href="?page=tampilT"><i class="halflings-icon edit"></i> Semua Data Toko</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="POST">
						  <fieldset>
							<input type="hidden" name="id_toko" id="inputSuccess" value="<?php echo $data['id_toko']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Toko</label>
								<div class="controls">
								  <input type="text" name="nama_u" readonly value="<?php echo $data['nama_toko']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Pemilik</label>
								<div class="controls">
								  <input type="text" name="nama_u" readonly value="<?php echo $data['nama_p']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Jenis Usaha</label>
								<div class="controls">
									<input type="text" name="nama_t" readonly value="<?php echo $data['jenis_usaha']; ?>" id="inputSuccess">
								</div>
							  </div>
							
							<div class="control-group">
								<label class="control-label" for="selectError">Jualan di</label>
								<div class="controls">
									<input type="text" name="nama_t" readonly value="<?php echo $data['nama_pasar']; ?>" id="inputSuccess">
								</div>
							  </div>          		
							<div class="control-group success">
								<label class="control-label" >Gambar</label>
								<div class="controls col-sm-6">
									<?php
										if ($data['gambar']==""){
									  ?>
									  <td colspan="4"><h3 style="color: red; ">Tidak ada gambar tersimpan untuk data ini</h3>
									  <td colspan="4"><p style="color: red; ">Silakan edit untuk menambah foto</p></td>
										<?php } 
									  else { ?>
									  <td colspan="4" ><a href="gambar_toko/<?php echo $data['gambar']; ?>"> 
									<img src="gambar_toko/<?php echo $data['gambar']; ?>"><p class="font-italic font-bold col-orange">klik untuk simpan gambar</p></a></td>
									  <?php } ?>
								</div>
							</div>    		
							<div class="form-actions">
							  <a href="?page=editT&id_toko=<?php echo $data['id_toko']; ?>" class="btn btn-primary m-t-15 waves-effect">Edit Data</a>
							  <a href="?page=tampilT" class="btn">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->