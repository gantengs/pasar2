	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>All Data User</h2>
						<div class="box-icon">
							<a href="?page=tambahU"><i class="halflings-icon edit"></i> Tambah Data User</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Nama User</th>
								  <th>Email</th>
								  <th>Password</th>
								  <th>Level</th>
								  <th>Bekerja di</th>
								  <th>No Telp</th>
								  <th>Alamat</th>
								  <th>status</th>
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
			<?php
			$sql=mysql_query("SELECT a.nama_pasar, b.id_user, b.email, b.password, b.level, b.nama_u, b.telp, b.alamat,b.foto FROM pasar a join user b on a.id_pasar=b.id_pasar order by b.nama_u asc") or die (mysql_error());
			$no = 1;
            while($r = mysql_fetch_array($sql)){
                ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['nama_u']; ?></td>
								<td><?php echo $r['email']; ?></td>
								<td><?php echo $r['password']; ?></td>
								<td><?php echo $r['level']; ?></td>
								<td><?php echo $r['nama_pasar']; ?></td>
								<td><?php echo $r['telp']; ?></td>
								<td><?php echo $r['alamat']; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<a href="?page=detilU&id_user=<?php echo $r['id_user']; ?>" class="btn btn-success" title="Detail" >
										<i class="halflings-icon white zoom-in"></i> 
									</a>
									<a class="btn btn-info" title="Edit" href="?page=editU&id_user=<?php echo $r['id_user']; ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" title="Hapus" href="?page=hapusU&id_user=<?php echo $r['id_user'];?>" onClick="return confirm('Yakin menghapus data ?');">
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