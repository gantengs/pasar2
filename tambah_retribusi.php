			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>					
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah Retribusi</h2>
						<div class="box-icon">
							<a href="?page=tampilR"><i class="halflings-icon list-alt"></i> All Data Retribusi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post">
						  <fieldset>
							<div class="control-group">
								<label class="control-label" for="selectError">Nama Toko</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_toko">
										 <?php
										 $a="SELECT * from toko order by nama_toko asc";
										 $sql=mysql_query($a);
										 while($data=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data['id_toko']?>"><?php echo $data['nama_toko']?></option>
										 <?php
										 }
										 ?>
									</select>  
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal</label>
							  <div class="controls">
								<input type="text" required name="tanggal" class="input-xlarge datepicker"  id="datepicker" value="">
							  </div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Jumlah Bayar</label>
								<div class="controls">
								  <input type="number" name="bayar" required id="inputSuccess" placeholder="Jumlah Bayar">
								</div>
							</div>			
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="simpan">Simpan Data</button>
							  <button type="reset" class="btn">Reset</button>
							</div>
						  </fieldset>
						</form>
						<?php
					        error_reporting(0);
					        require_once "koneksi.php";
					        if (isset($_POST['simpan'])) {
					        	$tanggal = $_POST['tanggal'];
								$tanggal = explode('/', $tanggal); //mengubah string mengjadi array
								$tanggal = $tanggal['2'].'-'.$tanggal['0'].'-'.$tanggal['1'];


					          $sql_insert = "INSERT into retribusi (id_toko,tanggal, jumlah) values(
					            '".$_POST['id_toko']."',
					            '".$tanggal."',
					            '".$_POST['bayar']."')";

					            $query_insert = mysql_query($sql_insert) or die (mysql_error());

					            if ($query_insert) {

									echo "<script>alert('Data Berhasil ditambah!'); window.location = 'index.php?page=tampilR'</script>";
					            }else{
					                echo "<div class='alert alert-danger'>
					                  <a href='' class='close' data-dismiss='alert'>&times;
					                  </a>Gagal Simpan !
					                  </div>";
					                }
					        }
					      ?> 

					</div>
					</div>
				</div><!--/span-->

			</div><!--/row-->
			<script> 
            $('#datepicker').datepicker({
                 format: 'yyyy-mm-dd',
                 autoclose: true,
                 todayHighlight: true
            })
        </script>