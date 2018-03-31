			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>					
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah Komoditi</h2>
						<div class="box-icon">
							<a href="?page=tampil_komoditi"><i class="halflings-icon list-alt"></i> All Data Komoditi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="Tko.php" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Jenis Komoditi</label>
								<div class="controls">
								  <input type="text" name="jenis_komoditi" required id="inputSuccess" placeholder="Contoh : Beras">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label">Satuan</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="satuan" id="optionsRadios1" value="kg" checked="">
									Kg
								  </label>
								  <label class="radio">
									<input type="radio" name="satuan" id="optionsRadios2" value="liter">
									Liter
								  </label>
								  <label class="radio">
									<input type="radio" name="satuan" id="optionsRadios2" value="gram">
									Gram
								  </label>
								  <div style="clear:both"></div>
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Foto Komoditi</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" name ="datafile" type="file">
							  </div>
							</div>     							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>

					</div>
					</div>
				</div><!--/span-->

			</div><!--/row-->

