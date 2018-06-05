<div id="faq" class="container">

  <!-- Page Header -->    
  <div class="row">                        
      <div class="col-md-12">
        <h1 class="header-fac"><a href="#"> Araçlarımız</a></h1>
        <p></p>
        <hr>
      </div>
  </div>    
  <!-- /Page Header -->

<!-- Choose Car -->
	  <section id="choose-car">
      <div class="container">
	     <div class="row">                        
        <div class="col-md-12">
              <div> <h3 class="header header-car">Araçlarımız</h3></div>
			  <div>
			    <ul class="nav nav-tabs nav-tabs-center" style="margin-bottom:20px;">
            <?php $ilk=true ; foreach ($araclar as $arac){ 
            
            if($ilk){
              ?>
              <li class="active"><a data-toggle="tab" href="#<?php echo 'arac'.$arac->galeriId; ?>"><?php echo $arac->galeriAd; ?></a></li>

            <?php  $ilk=false;
            }else{?>
              
              <li><a data-toggle="tab" href="#<?php echo 'arac'.$arac->galeriId; ?>"><?php echo $arac->galeriAd; ?></a></li>

            <?php }
              ?>
            
            <?php } ?>
          </ul>
          <div class="tab-content">
          <?php $ilk=true ; 

            foreach ($araclar as $arac) {
               if($ilk){
                  echo '<div id="arac'.$arac->galeriId.'" class="tab-pane fade in active">';
                  $ilk = false;
                }
                else{
                  echo '<div id="arac'.$arac->galeriId.'" class="tab-pane fade">';
                }
              foreach ($resimler as $resim){ 
               
                if($resim->galeriId==$arac->galeriId)
                  {
                  ?>
                  <div class="col-md-3" style="margin-right: 5px;">
                  <a href="<?php echo base_url().'public/admin/uploads/'.$resim->resimAd; ?>" data-lightbox="<?php echo 'image-'.$arac->galeriId ?>" data-title="<?php echo $arac->galeriAd ?>">
                    <img alt="fix Taksi" src="<?php echo base_url().'public/admin/uploads/'.$resim->resimAd; ?>" title="fix Taksi" style="width:400px;height:200px;margin:0 auto;display:block;" >
                    </a>
                    <!--<div class="uk-grid uk-grid-divider uk-text-center">
                      <div class="uk-width-medium">
                        <div class="uk-panel uk-panel-box uk-panel-box-primary">
                          <h4 class="uk-text-white"></h4>
                        </div>
                      </div>
                    </div>-->                
                  </div>
                  <?php 
                      }
                    } 
                    
                    echo '</div>' ;
                    
                    } ?>
			     </div>
		    </div>
		     </div>
	     </div>
      </div>
	  </section>
	  <!-- /Choose Car -->
    </div>

