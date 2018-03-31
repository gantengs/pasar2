			<?php
    //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
    $id = $_GET['id_komoditi'];
    
    //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	
    $show = mysql_query("SELECT * FROM jenis_komoditi WHERE id_komoditi='$id'");
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
						<h2><i class="halflings-icon komoditi"></i><span class="break"></span>Detail Data Komoditi</h2>
						<div class="box-icon">
							<a href="?page=komoditi"><i class="halflings-icon edit"></i> Semua Data Komoditi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="POST">
						  <fieldset>
							<input type="hidden" name="id_komoditi" id="inputSuccess" value="<?php echo $data['id_komoditi']; ?>">
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Jenis komoditi</label>
								<div class="controls">
								  <input type="text" name="nama_u" readonly value="<?php echo $data['komoditi']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Satuan</label>
								<div class="controls">
								  <input type="text" name="nama_u" readonly value="<?php echo $data['satuan']; ?>" id="inputSuccess">
								</div>
							</div>
							<div class="control-group success">
								<label class="control-label" for="inputSuccess">Foto komoditi</label>
								<div class="controls">
									<img src="gambar_komoditi/<?php echo $data['gambar']; ?>">
								</div>
							</div>       		
							<div class="form-actions">
							  <a href="?page=editK&id_komoditi=<?php echo $data['id_komoditi']; ?>" class="btn btn-primary m-t-15 waves-effect">Edit Data</a>
							  <a href="?page=tampilK" class="btn">Batal</a>
							</div>
						  </fieldset>
						</form>   

					</div>
					</div>
				</div><!--/span-->