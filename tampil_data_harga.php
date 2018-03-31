	<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon list-alt"></i><span class="break"></span>Data Harga Komoditi</h2>
						<div class="box-icon">
							<a href="?page=tambahH"><i class="halflings-icon edit"></i> Tambah Data Harga</a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>No</th>
								  <th>Lokasi</th>
								  <?php
							
							// form komoditi di terbentuk dinamis berdasarkan yang ada di database tabel KOMODITI
			$no=1;
			$sq = mysql_query("SELECT COLUMN_NAME as komoditas FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'db_pasar2' AND TABLE_NAME = 'harga_komoditi' and COLUMN_NAME <> 'id_pasar' and COLUMN_NAME <> 'id_catat' and COLUMN_NAME <> 'tgl'");
			while ($s=mysql_fetch_array($sq)){
			?>
							<th><?php echo $s['harga_komoditas']; ?></th>
			<?php
			}
			?>  
								  <th>Action</th>
							  </tr>
						  </thead>   
						  <tbody>
			<?php
			$sql=mysql_query("SELECT a.nama_pasar, b.beras, b.teh, b.gula, b.kopi FROM pasar a join harga_komoditi b on a.id_pasar=b.id_pasar order by a.nama_pasar asc") or die (mysql_error());
			$no = 1;
            while($r = mysql_fetch_array($sql)){
                ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $r['nama_pasar']; ?></td>
								<td><?php echo $r['beras']; ?></td>
								<td><?php echo $r['teh']; ?></td>
								<td><?php echo $r['gula']; ?></td>
								<td><?php echo $r['kopi']; ?></td>
								<td class="center">
									<a class="btn btn-success" title="Detail" href="#">
										<i class="halflings-icon white zoom-in"></i>  
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