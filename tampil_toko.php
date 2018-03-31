	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>Data Toko</h2>
						<div class="box-icon">
							<a href="?page=tambahT"><i class="halflings-icon edit"></i> Tambah Data Toko</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Jualan di</th>
								  <th>Nama Toko</th>
								  <th>Nama Pemilik</th>
								  <th>Jenis Usaha</th>
								  <th>Status</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
			<?php
			$sql=mysql_query("SELECT a.nama_pasar, b.id_toko, b.nama_toko, b.nama_p, c.jenis_usaha FROM
			pasar a join toko b join usaha c on a.id_pasar=b.id_pasar and b.id_usaha=c.id_usaha order by a.nama_pasar asc") or die (mysql_error());
			$no = 1;
            while($r = mysql_fetch_array($sql)){
                ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['nama_pasar']; ?></td>
								<td><?php echo $r['nama_toko']; ?></td>
								<td><?php echo $r['nama_p']; ?></td>
								<td><?php echo $r['jenis_usaha']; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a href="?page=detilT&id_toko=<?php echo $r['id_toko']; ?>" class="btn btn-success" title="Detail" >
										<i class="halflings-icon white zoom-in"></i>  
									</a>
									<a class="btn btn-info" title="Edit" href="?page=editT&id_toko=<?php echo $r['id_toko']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Hapus" href="?page=hapusT&id_toko=<?php echo $r['id_toko'];?>" onClick="return confirm('Yakin menghapus data ?');">
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