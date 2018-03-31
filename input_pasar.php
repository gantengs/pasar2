<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
*/
	define('db_host','localhost');
	define('db_user','root');
	define('db_pass','');
	define('db_name','db_pasar1');
	
	mysql_connect(db_host,db_user,db_pass);
	mysql_select_db(db_name);
	
	// queri untuk menambahkan atribut/ kolom pada table komoditi ALTER TABLE `komoditi` ADD `kopi` INT NULL DEFAULT '0' ;
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Input Maps - www.yasirblog.com</title>
  <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> --> <!-- old version, doesnt work in localhost --> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuySLsxOyimI1gWcRRSMiuhcfwdhMAXFw&sensor=false" type="text/javascript"></script>
 </head>
 
 <body>
  <a href="index.php">Input Lokasi</a> | 
  <a href="tampil.php">Lihat Daftar Lokasi </a> |
  <a href="semua.php">Semua Lokasi</a> |
  <a href="cusmark.php">Custom Marker</a><br/><br/>
  
   <form   method="POST" id="form1" action="p.php" class='form-horizontal'>
    <br/>
	<div class="control-group">
       <label class="control-label" for="lat">Nama Pasar</label>
       <div class="controls">
         <select required name="id_tempat">
										 <?php
										 $a="SELECT * from tempat order by nama asc";
										 $sql=mysql_query($a);
										 while($data=mysql_fetch_array($sql)){
										 ?>
										 <option class="form-control" value="<?php echo $data['id_tempat']?>"><?php echo $data['nama']?></option>
										 <?php
										 }
										 ?>
										 </select>  
       </div>
     </div>
    <div class="control-group">
       <label class="control-label" for="nama">tanggal</label>
       <div class="controls">
         <input type="date" name='tanggal' class='input-xlarge'>
       </div>
     </div>
	 
     <div class="control-group">
       <label class="control-label" for="lat">harga beras</label>
       <div class="controls">
         <input type="number" name='beras' min="0" placeholder="0" >
       </div>
     </div>
    <div class="control-group">
       <label class="control-label" for="lat">harga gula</label>
       <div class="controls">
         <input type="number" name='gula' min="0" placeholder="0" >
       </div>
     </div>
	 <div class="control-group">
       <label class="control-label" for="lat">harga teh</label>
       <div class="controls">
         <input type="number" name='teh' min="0" placeholder="0" >
       </div>
     </div>
	 <div class="control-group">
       <label class="control-label" for="lat">harga kopi</label>
       <div class="controls">
         <input type="number" name='kopi' min="0" placeholder="0" >
       </div>
     </div>
     <div class="control-group">
       <div class="controls">
         <button type="submit" class="btn btn-success" name='aksi'>Submit</button>
       </div>
     </div>
    </form>
 </body>
</html>