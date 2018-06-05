<div id="" class="container">

  <!-- Sayfa Başlık -->	  
  <div class="row">                        
      <div class="col-md-12">
        <h1 class="header-fac"><a href="#"> Hizmetler</a></h1>
        <p></p>
        <hr>
      </div>
  </div>		
  <!-- /Sayfa Başlık -->


  <!-- Hizmetler -->
	 <div class="row">
        
	    <div class="col-md-12">
        <h3 class="text-left uk-text-black"><?php echo $kategori->kategoriAdi ?></h3>
        <p class="header-p text-left"></p>
          <div class="panel-group" id="<?php echo "collpase".$kategori->kategoriId; ?>">
           <?php $first = true;
            foreach ($hizmetler as $hizmet){
              if($first){
              ?> 
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#<?php echo "collpase".$kategori->kategoriId; ?>" href="<?php echo '#collapseThree'.$hizmet->hizmetId; ?>" class="btn btn-block accord" style="white-space: normal;">
                    	<?php echo $hizmet->hizmetBaslik; ?></a>  
                  </h4>
                </div>
                <div id="<?php echo 'collapseThree'.$hizmet->hizmetId; ?>" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p><?php echo $hizmet->hizmetIcerik; ?></p>
                  </div>
                </div>
              </div>
          <?php $first = false;} 
          else{?>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#<?php echo "collpase".$kategori->kategoriId; ?>" href="<?php echo '#collapseThree'.$hizmet->hizmetId; ?>" class="btn btn-block accord" style="white-space: normal;">
                    	<?php echo $hizmet->hizmetBaslik; ?></a>  
                  </h4>
                </div>
                <div id="<?php echo 'collapseThree'.$hizmet->hizmetId; ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p><?php echo $hizmet->hizmetIcerik; ?></p>
                  </div>
                </div>
              </div>
          <?php }
          }
          ?>
        	</div>			
		  </div> 
		</div>		
	<!-- /Hizmetler -->
</div>	