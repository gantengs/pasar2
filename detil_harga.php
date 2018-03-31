					<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_catat'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
    $show = mysql_query("SELECT a.nama_t, b.nama_u, b.telp, b.alamat, b.id_user FROM tempat a join user b WHERE id_catat='$id'");
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Tambah Data Harga Komoditi</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="p.php" method="POST">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError">Lokasi Pasar</label>
								<div class="controls">
									<input type="text" name='nama' readonly value="<?php echo $data['nama_t']; ?>" id="inputSuccess">
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal</label>
							  <div class="controls">
								<input type="text" required name="tgl" readonly value="<?php echo $data['nama_t']; ?>">
							  </div>
							</div>
							<?php
							
							// form komoditi di terbentuk dinamis berdasarkan yang ada di database tabel KOMODITI
			$no=1;
			$sq = mysql_query("SELECT COLUMN_NAME as komoditas FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'db_pasar1' AND TABLE_NAME = 'komoditi' and COLUMN_NAME <> 'id_tempat' and COLUMN_NAME <> 'id_catat' and COLUMN_NAME <> 'tgl'");
			while ($s=mysql_fetch_array($sq)){
			?>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">harga <?php echo $s['komoditas']; ?></label>
								<div class="controls">
								  <input type="number" name='<?php echo $s['komoditas']; ?>' id="inputSuccess" min="0" placeholder="0">
								</div>
							</div>
			<?php
			}
			?>        		
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" value="tambah">Simpan Data</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->