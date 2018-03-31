			<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_retribusi'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	
    $show = mysql_query("SELECT toko.nama_toko, retribusi.tanggal, retribusi.jumlah from toko, retribusi where id_retribusi='$id'");
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
						<h2><i class="halflings-icon toko"></i><span class="break"></span>Detail Data Retribusi</h2>
						<div class="box-icon">
							<a href="?page=tampilT"><i class="halflings-icon edit"></i> Semua Data Retribusi</a>
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
								  <input type="text" name="nama_toko" readonly value="<?php echo $data['nama_toko']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Tanggal (yyyy-mm-dd)</label>
								<div class="controls">
								  <input type="text" name="tanggal" readonly value="<?php echo $data['tanggal']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="selectError">Jumlah</label>
								<div class="controls">
									<input type="text" name="jumlah" readonly value="Rp.  <?php echo number_format ($data['jumlah'], 2, ',', '.');?>" id="inputSuccess">
								</div>
							  </div>

							<div class="form-actions">
								<a href="?page=editR&id_retribusi=<?php echo $id ?>" class="btn btn-primary m-t-15 waves-effect">Edit Data</a>
								<a href="?page=tampilR" class="btn">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->