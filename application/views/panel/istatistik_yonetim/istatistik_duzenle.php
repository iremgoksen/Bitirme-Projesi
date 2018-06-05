<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url("panel"); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url("panel/istatistik_yonetim"); ?>"><i class="material-icons">local_offer</i> İstatistik Listesi</a></li>
	    <li class="active"><i class="material-icons">edit</i>İstatistik Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            İstatistik Düzenle
		        </h2>
		        
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/istatistik_yonetim/istatistik_guncelle/<?php echo $istatistik->istatistikId ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >İstatistik Adı</label> 
							<input type="text" class="form-control" name="istatistikAd" placeholder="örn:İstatistik Ad" value="<?php echo $istatistik->istatistikAd ?>" required=""> 
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label" >İstatistik Değer</label> 
						<div class="input-group input-group-sm">
	                        <div class="form-line">
	                            <input type="number" class="form-control" name="istatistikDeger" value="<?php echo $istatistik->istatistikDeger ?>" required="">
	                        </div>
	                    </div>
					</div>
					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Düzenle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>