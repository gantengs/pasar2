			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>					
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah pasar</h2>
						<div class="box-icon">
							<a href="?page=tampil_pasar"><i class="halflings-icon list-alt"></i> All Data pasar</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="TT.php" method="post" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError">Nama Pasar</label>
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
								<label class="control-label" for="inputSuccess">Nama Toko</label>
								<div class="controls">
								  <input type="text" name="nama_toko" required id="inputSuccess" placeholder="Nama Toko">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Nama Pemilik</label>
								<div class="controls">
								  <input type="text" name="nama_p" required id="inputSuccess" placeholder="Nama Pemilik">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Jenis Usaha</label>
								<div class="controls">
									<select  data-rel="chosen" required name="id_usaha">
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
							  <label class="control-label" for="fileInput">Foto pasar</label>
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

