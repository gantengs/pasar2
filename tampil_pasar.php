	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><a href="#" class="halflings-icon list-alt"></a><span class="break"></span>All Data Pasar</h2>
						<div class="box-icon">
							<a href="?page=tambahP"><i class="halflings-icon edit"></i> Tambah Data Pasar</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama</th>
								  <th>No Telp</th>
								  <th>Alamat</th>
								  <th>status</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
			<?php
			$sql=mysql_query("SELECT * FROM pasar order by nama_pasar asc") or die (mysql_error());
			$no = 1;
            while($r = mysql_fetch_array($sql)){
                ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['nama_pasar']; ?></td>
								<td><?php echo $r['telp']; ?></td>
								<td><?php echo $r['alamat']; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a href="?page=detilP&id_pasar=<?php echo $r['id_pasar']; ?>" class="btn btn-success" title="Detail" >
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" title="Edit" href="?page=editP&id_pasar=<?php echo $r['id_pasar']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Hapus" href="?page=hapusP&id_pasar=<?php echo $r['id_pasar'];?>" onClick="return confirm('Yakin menghapus data ?');">
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