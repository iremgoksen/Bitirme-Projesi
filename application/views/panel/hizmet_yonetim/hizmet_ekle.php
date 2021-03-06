<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/hizmet_yonetim/"><i class="material-icons">work</i> Hizmetler</a></li>
	    <li class="active"><i class="material-icons">add</i>Hizmet Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Hizmet Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/hizmet_yonetim/hizmet_ekle/" method="POST" accept-charset="utf-8">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Hizmet Başlık</label> 
							<input type="text" class="form-control" name="hizmetBaslik" placeholder="örn:Taşıma" required=""> 
						</div>
					</div>
					<div class="form-group"> 
						<label class="control-label">Hizmet Durumu</label> 
					 	<div class="switch">
                            <label>Kapalı<input type="checkbox" checked="" name="hizmetDurum"><span class="lever"></span>Açık</label>
                        </div>
					</div>
					<div class="form-group">
							<label class="control-label">Hizmet İçerik</label> 
							<textarea id="tinymce" name="hizmetIcerik">hizmet içeriğini tasarlayınız!</textarea>

					</div>
					
					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/tinymce.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/pages/forms/editors.js"></script>