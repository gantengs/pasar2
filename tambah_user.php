			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>					
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah User</h2>
						<div class="box-icon">
							<a href="?page=tampil_user"><i class="halflings-icon list-alt"></i> All Data User</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="TU.php" method="post" enctype="multipart/form-data">
						<fieldset>
						<div class="control-group success">
							<label class="control-label" for="inputSuccess">Nama User</label>
							<div class="controls">
							  <input type="text" name="nama_u" required id="inputSuccess" placeholder="Toni Alfiyan">
							</div>
						</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Email</label>
								<div class="controls">
								  <input type="email" name="email" required id="inputSuccess" placeholder="Contoh = Rudi@gmail.com">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Password</label>
								<div class="controls">
								  <input type="text" name="password" required id="inputSuccess" placeholder="Gunakan Pasword Yang Aman">
								</div>
							</div>
							  <div class="control-group">
								<label class="control-label">Level</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="level" id="optionsRadios1" value="admin" checked="">
									Admin
								  </label>
								  <label class="radio">
									<input type="radio" name="level" id="optionsRadios2" value="pimpinan">
									Pimpinan
								  </label>
								  <label class="radio">
									<input type="radio" name="level" id="optionsRadios2" value="petugas_pasar">
									Petugas Pasar
								  </label>
								  <div style="clear:both"></div>
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="selectError">Bekerja di</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_pasar">
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
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Telp</label>
								<div class="controls">
								  <input type="text" name="telp" required id="inputSuccess" placeholder="089519851482">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Alamat</label>
								<div class="controls">
								  <input type="text" name="alamat" required id="inputSuccess" placeholder="Alamat">
								</div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="fileInput">Foto User</label>
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

