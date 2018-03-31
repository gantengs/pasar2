			
<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_retribusi'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	
    $show = mysql_query("SELECT * from retribusi where id_retribusi='$id'");
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
						<h2><i href="#" class="halflings-icon edit"></i><span class="break"></span>Tambah Retribusi</h2>
						<div class="box-icon">
							<a href="?page=tampilR"><i class="halflings-icon list-alt"></i> All Data Retribusi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="update_R.php" method="post">
						  <fieldset>
							<input type="hidden" name="id_retribusi" id="inputSuccess" value="<?php echo $data['id_retribusi']; ?>">
							<div class="control-group">
								<label class="control-label" for="selectError">Nama Toko</label>
								<div class="controls">
									<select id="selectError" data-rel="chosen" required name="id_toko">
										 <?php
										 $a="SELECT * from toko order by nama_toko asc";
										 $sql=mysql_query($a);
										 while($data1=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data1['id_toko']?>"><?php echo $data1['nama_toko']?></option>
										 <?php
										 }
										 ?>
									</select>  
								</div>
							  </div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal (yyyy-mm-dd)</label>
							  <div class="controls">
								<input type="text" required name="tanggal" class="input-xlarge datepicker"  id="datepicker" value="<?php echo $data['tanggal']; ?>">
							  </div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Jumlah Bayar</label>
								<div class="controls">
								  <input type="number" name="jumlah" required id="inputSuccess" placeholder="Jumlah Bayar" value="<?php echo $data['jumlah']; ?>">
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
			<script> 
            $('#datepicker').datepicker({
                 format: 'yyyy-mm-dd',
                 autoclose: true,
                 todayHighlight: true
            })
        </script>