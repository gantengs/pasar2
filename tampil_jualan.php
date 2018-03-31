	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><a href="#" class="halflings-icon list-alt"></a><span class="break"></span>All Data Jenis Usaha</h2>
						<div class="box-icon">
							<a href="?page=tambahJ"><i class="halflings-icon edit"></i> Tambah Jenis Usaha</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Jenis Usaha</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
			<?php
			$sql=mysql_query("SELECT * FROM usaha order by jenis_usaha asc") or die (mysql_error());
			$no = 1;
            while($r = mysql_fetch_array($sql)){
                ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['jenis_usaha']; ?></td>
								<td class="center">
									<a href="?page=detilJ&id_usaha=<?php echo $r['id_usaha']; ?>" class="btn btn-success" title="Detail" >
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" title="Edit" href="?page=editJ&id_usaha=<?php echo $r['id_usaha']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Hapus" href="?page=hapusJ&id_usaha=<?php echo $r['id_usaha'];?>" onClick="return confirm('Yakin menghapus data ?');">
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