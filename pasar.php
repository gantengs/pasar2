<?php
	//inlcude atau memasukkan file koneksi ke database
	require_once "koneksi.php";	//memanggil file koneksi
	
	// queri untuk menambahkan atribut/ kolom pada table komoditi ALTER TABLE `komoditi` ADD `kopi` INT NULL DEFAULT '0' ;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Maps - www.yasirblog.com</title>
  </head>
  <body>
    <a href="input_pasar.php">Input Data</a> | 
    <a href="pasar.php">Lihat Harga </a><br/><br/>
      <table border="1" >
	  
		<?php 
			$sql1=mysql_query("select day(tgl) as uy from komoditi where id_tempat='2' and month(tgl)='5'");
			
		?>
		<form method='POST'>
						<select name="txtbulan">
						<option value="" disabled="disabled">--Bulan--</option>
						 <?php
						 
						 $sql3=mysql_query("SELECT month(tgl) as ai from komoditi group by month(tgl)");
						 while($data=mysql_fetch_array($sql3)){
						 ?>
						 <option value="<?php echo $data['ai']?>"><?php echo $data['ai']?></option>
						 <?php
						 }
						 ?>
						 </select>
						
						<select name="txtthn">
						<option value="" disabled="disabled">--Tahun--</option>
						 <?php
						 $a="SELECT year(tgl) as ai from komoditi group by year(tgl)";
						 $sql=mysql_query($a);
						 while($data=mysql_fetch_array($sql)){
						 ?>
						 <option value="<?php echo $data['ai']?>"><?php echo $data['ai']?></option>
						 <?php
						 }
						 ?>
						 </select>
						 <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="btnSimpan" value="Cari" />
						</form>
        <tr>
          <td rowspan="2">No</td>
          <td rowspan="2">Komoditas</td>
          <td colspan="4"><center>Tanggal <?php echo date("M"); echo date("Y"); ?></center></td>
        </tr>
		<tr>
		<?php
		
		while($da=mysql_fetch_array($sql1)){

		?>
			<td><?php echo $da['uy']; ?></td>
			<?php
		}
			?>
		</tr>
						
						 <?php
 if (@$_POST['btnSimpan'] == "Cari") 
     {
       $tanggal=getdate();
	   ?>
			<tr>
			<?php
			
			$no=1;
			$sq = mysql_query("SELECT COLUMN_NAME as komoditas FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$database' AND TABLE_NAME = 'komoditi' and COLUMN_NAME <> 'id_tempat' and COLUMN_NAME <> 'id_catat' and COLUMN_NAME <> 'tgl'");
			while ($s=mysql_fetch_array($sq)){
			?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $s['komoditas']; ?></td>
			<?php 
			$kom = $s['komoditas'];
			$sq1 = mysql_query("select ".$kom." from komoditi where id_tempat='2' and month(tgl)='5'");
			while ($ss=mysql_fetch_array($sq1)){
			?>
			<td><?php echo $ss["$kom"]; ?></td>
			<?php
			}
			?>
			</tr>
      
	  <?php
			}
	 }
            ?>		
      </table>
  </body>
</html>