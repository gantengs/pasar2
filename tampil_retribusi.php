	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><a href="#" class="halflings-icon list-alt"></a><span class="break"></span>All Data Retribusi</h2>
						<div class="box-icon">
							<a href="?page=tambahR"><i class="halflings-icon edit"></i> Tambah Retribusi</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama Toko</th>
								  <th>Tanggal (yyyy-mm-dd)</th>
								  <th>Jumlah</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
							<?php
							$sql=mysql_query("SELECT retribusi.id_retribusi, toko.nama_toko, retribusi.tanggal, retribusi.jumlah FROM retribusi, toko where retribusi.id_toko=toko.id_toko order by id_retribusi asc") or die (mysql_error());
							$no = 1;
					        while($r = mysql_fetch_array($sql)){
					            ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['nama_toko']; ?></td>
								<td><?php echo $r['tanggal']; ?></td>
								<td>Rp.  <?php echo number_format ($r['jumlah'], 2, ',', '.');?></td>
								<td class="center">
									<a href="?page=detilR&id_retribusi=<?php echo $r['id_retribusi']; ?>" class="btn btn-success" title="Detail" >
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" title="Edit" href="?page=editR&id_retribusi=<?php echo $r['id_retribusi']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Hapus" href="?page=hapusR&id_retribusi=<?php echo $r['id_retribusi'];?>" onClick="return confirm('Yakin menghapus data ?');">
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
			<?php
			}
			?>				
						  </tbody>
						</table>            
					</div>
				</div><!--/span-->
	</div>