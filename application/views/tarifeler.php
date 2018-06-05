<!-- Taxis For Sale -->
<section id="taxisSale">
	<div class="container">
	  <div class="row">                        
	    <div class="col-md-12">
	      <h1 class="header-fac" style="text-align: center"><a href="#" style="text-decoration: none"> Konum Odaklı İstatistikimiz</a></h1>
	    </div>
	  </div>
	  <div class="row">                        
	    <div class="col-md-12">
	      <div class="sprocket-tables">
	        <ul class="sprocket-tables-container cols-4">
	        <?php foreach ($istatistikler as $istatistik){ ?>
	        	<li class="sprocket-tables-block">
		            <div class="sprocket-tables-item">
			    	  <img src="<?php echo base_url(); ?>public/admin/uploads/logo.png" class="sprocket-tables-image" alt="image">
					  <div class="sprocket-tables-desc sprocket-tables-cell sprocket-tables-bg1">
					    <span class="sprocket-tables-text">
					      Konum:<?php echo $istatistik->istatistikKonum; ?>
					    </span>
				      </div>
					  <span class="sprocket-tables-price sprocket-tables-cell sprocket-tables-bg2">
				        <?php echo $istatistik->istatistikFiyat; ?>TL
					  </span>
					  <div class="sprocket-tables-link sprocket-tables-cell sprocket-tables-bg1">
			            <a href="#" class="btn btn-default">Fix Taksi</a>
		              </div>
			        </div>
	          	</li>
	        <?php } ?>
	          
	        </ul>
	      </div>						  
	    </div>
	  </div>		
	</div>
</section>
<!-- /Taxis For Sale -->