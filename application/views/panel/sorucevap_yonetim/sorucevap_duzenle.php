<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/sorucevap_yonetim/"><i class="material-icons">question_answer</i> Soru&Cevap</a></li>
	    <li class="active"><i class="material-icons">edit</i>Sorucevap Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Soru&Cevap Düzenle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/sorucevap_yonetim/sorucevap_guncelle/<?php echo $sorucevap->sorucevapId; ?>" method="POST" accept-charset="utf-8">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Soru</label> 
							<input type="text" class="form-control" name="soru" placeholder="Safa" required="" value="<?php echo $sorucevap->soru; ?>"> 
						</div>
					</div>
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Cevap</label> 
							<input type="text" class="form-control" name="cevap" placeholder="Safa" required="" value="<?php echo $sorucevap->cevap; ?>"> 
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

<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/tinymce.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/pages/forms/editors.js"></script>