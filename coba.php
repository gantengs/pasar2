
	<!-- end: Mobile Specific -->
	<link rel="stylesheet" href="css/GambarUp.css">

			
			<!-- start: Content -->
			

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon picture"></i><span class="break"></span> Gallery</h2>
						<div class="box-icon">
							<a href="#" id="toggle-fullscreen" class="hidden-phone hidden-tablet"><i class="halflings-icon fullscreen"></i></a>
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<?php
		$foto = array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg','7.jpg','8.jpg','9.jpg','10.jpg','11.jpg','12.jpg','13.jpg');
		$foto2 = "img/gallery/photo".implode(",img/gallery/photo",$foto);
	?>
					<div class="box-content">
						<div class="masonry-gallery">
							<?php
				$foto3 = explode(",",$foto2);
				foreach($foto3 as $key => $value)
				{
					?>
					<div id="image-<?php echo $key+1; ?>" data-links="<?php echo $foto2; ?>"  class="masonry-thumb magnific-gallery">
						<a style="background:url(<?php echo $value; ?>)" title="<?php  echo $value; ?>" href="<?php echo $value; ?>">
							<img class="grayscale" src="<?php echo $value; ?>" alt="Image<?php  echo $value; ?>">
						</a>
					</div>
					<?php
				}
				?>	
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
	
	
	<!-- start: JavaScript-->
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.0/jquery.magnific-popup.min.js'></script>
		<script src="js/GambarUp.js"></script>
		
		