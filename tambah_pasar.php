			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah Pasar</h2>
						<div class="box-icon">
							<a href="?page=tampilP"><i class="halflings-icon list-alt"></i> All Data Pasar</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
					<div id="map" style="width:100%;height: 470px;"></div>
                            
						<form class="form-horizontal" action="TP.php" method="POST" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Titik</label>
								<div class="controls">
								  <input type="text" name="lat" required  placeholder="0">
								  <input type="text" name="lng" required  placeholder="0">
								  
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Pasar</label>
								<div class="controls">
								  <input type="text" name="nama_pasar" required id="inputSuccess" placeholder="contoh : Pasar Wergu">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">No Telp</label>
								<div class="controls">
								  <input type="text" name="telp" required id="inputSuccess" placeholder="083222777999">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Alamat</label>
								<div class="controls col-sm-6">
								  <textarea name="alamat" required id="inputSuccess" placeholder="contoh : jln. Barokah illahi no 32 Blok C aman"></textarea>
								</div>
								
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Foto Pasar</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name ="datafile" type="file">
							  </div>
							</div>     							
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