<div id="faq" class="container">

  <!-- Page Header -->	  
  <div class="row">                        
      <div class="col-md-12">
        <h1 class="header-fac"><a href="#"> Sık Sorulan Sorular</a></h1>
        <p></p>
        <hr>
      </div>
  </div>		
  <!-- /Page Header -->


  <!-- F.A.Q. -->
	 <div class="row">                        
	    <div class="col-md-12">
        <p class="header-p text-left"></p>
          <div class="panel-group" id="accordionThree">
          <?php $first = true;
          foreach ($sorucevaplar as $sorucevap){
            if($first){
            ?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionThree" href="<?php echo '#collapseThree'.$sorucevap->sorucevapId; ?>" class="btn btn-block accord" style="white-space: normal;"><?php echo $sorucevap->soru; ?></a>  
                  </h4>
                </div>
                <div id="<?php echo 'collapseThree'.$sorucevap->sorucevapId; ?>" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p><?php echo $sorucevap->cevap; ?></p>
                  </div>
                </div>
              </div>
          <?php $first = false;} 
          else{?>
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordionThree" href="<?php echo '#collapseThree'.$sorucevap->sorucevapId; ?>" class="btn btn-block accord" style="white-space: normal;"><?php echo $sorucevap->soru; ?></a>  
                  </h4>
                </div>
                <div id="<?php echo 'collapseThree'.$sorucevap->sorucevapId; ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p><?php echo $sorucevap->cevap; ?></p>
                  </div>
                </div>
              </div>
          <?php }
          }
          ?>
        	</div>			
		  </div>
		</div>			
	<!-- /F.A.Q. -->
</div>	