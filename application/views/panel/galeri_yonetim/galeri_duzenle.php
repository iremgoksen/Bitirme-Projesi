<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana galeri</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/galeri_yonetim/"><i class="material-icons">home</i> Galeriler</a></li>
	    <li class="active"><i class="material-icons">edit</i>Galeri Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Galeri Düzenle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/galeri_yonetim/galeri_guncelle/<?php echo $galeri->galeriId; ?>" method="POST" accept-charset="utf-8">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Galeri Ad</label> 
							<input type="text" class="form-control" name="galeriAd" placeholder="örn:Slider" required="" value="<?php echo $galeri->galeriAd; ?>"> 
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