			<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_user'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysql_query("SELECT a.nama_pasar, b.id_user, b.email, b.password, b.level, b.foto, b.nama_u, b.telp, b.alamat,b.foto FROM pasar a join user b WHERE id_user='$id'");
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
						<h2><i class="halflings-icon user"></i><span class="break"></span>Edit Data User</h2>
						<div class="box-icon">
							<a href="?page=tambahU" "><i class="halflings-icon edit"></i>Tambah Data User</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
					<div class="controls col-sm-6">
									<?php
										if ($data['foto']==""){
									  ?>
									  <td colspan="4"><h3 style="color: red; ">Tidak ada gambar tersimpan untuk data ini</h3>
									  <td colspan="4"><p style="color: red; ">Silakan edit untuk menambah foto</p></td>
										<?php } 
									  else { ?>
									  <td colspan="4" ><a href="gambar_user/<?php echo $data['foto'];?>">
									<div style="width:100%;height: 100%;"><img src="gambar_user/<?php echo $data['foto'];?>"></div><br><p class="font-italic font-bold col-orange">klik untuk simpan gambar</p></a></td>
									  <?php } ?>
								</div>
					
						<form class="form-horizontal" action="" method="POST">
						  <fieldset>
							<input type="hidden" name='id_pasar' id="inputSuccess" value="<?php echo $data['id_user']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama User</label>
								<div class="controls">
								  <input type="text" name="nama_u" readonly value="<?php echo $data['nama_u']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Bekerja di</label>
								<div class="controls">
									<input type="text" name="nama_t" readonly value="<?php echo $data['nama_pasar']; ?>" id="inputSuccess">
								</div>
							  </div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Email</label>
								<div class="controls">
								  <input type="text" name="telp" readonly value="<?php echo $data['email']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Password</label>
								<div class="controls">
								  <input type="text" name="telp" readonly value="<?php echo $data['password']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Level</label>
								<div class="controls">
								  <input type="text" name="telp" readonly value="<?php echo $data['level']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">No Telp</label>
								<div class="controls">
								  <input type="text" name="telp" readonly value="<?php echo $data['telp']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" >Alamat</label>
								<div class="controls col-sm-8">
								  <textarea name="alamat" readonly id="inputSuccess"><?php echo $data['alamat']; ?></textarea>
								</div>
							</div>        		
							<div class="form-actions">
							  <a href="?page=editU&id_user=<?php echo $data['id_user']; ?>" class="btn btn-primary m-t-15 waves-effect">Edit Data</a>
							  <a href="?page=tampilU" class="btn">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->