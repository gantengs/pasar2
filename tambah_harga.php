			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Tambah Data Harga Komoditi</h2>
						<div class="box-icon">
							<a href="?page=komoditi"><i class="halflings-icon list-alt"></i> Data Komoditi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="TH.php" method="POST">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError">Lokasi</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_tempat">
										 <?php
										 $a="SELECT * from pasar order by nama_pasar asc";
										 $sql=mysql_query($a);
										 while($data=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data['id_pasar']?>"><?php echo $data['nama_pasar']?></option>
										 <?php
										 }
										 ?>
									</select>  
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal</label>
							  <div class="controls">
								<input type="text" required name="tgl" class="input-xlarge datepicker" id="date01" value="">
							  </div>
							</div>
							<?php
							
							// form harga komoditi di terbentuk dinamis berdasarkan yang ada di database tabel harga_KOMODITI
			$no=1;
			$sq = mysql_query("SELECT COLUMN_NAME as komoditas FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$database' AND TABLE_NAME = 'harga_komoditi' and COLUMN_NAME <> 'id_pasar' and COLUMN_NAME <> 'id_catat' and COLUMN_NAME <> 'tgl'");
			while ($s=mysql_fetch_array($sq)){
			?>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">harga <?php echo $s['komoditas']; ?></label>
								<div class="controls">
								  <input type="number" name='<?php echo $s['komoditas']; ?>' id="inputSuccess" min="0" required value="0">
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

			</div><!--/row-->