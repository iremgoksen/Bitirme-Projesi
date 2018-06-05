<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/arac_yonetim/"><i class="material-icons">local_taxi</i> Araclar</a></li>
	    <li class="active"><i class="material-icons">add</i>Arac Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Araç Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/arac_yonetim/arac_ekle/" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Araç Adı</label> 
							<input type="text" class="form-control" name="aracAdi" placeholder="örn:Skoda" required=""> 
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Araç İçerik</label> 
						<textarea id="tinymce" name="aracIcerik">arac içeriğini tasarlayınız!</textarea>
					</div>
					<div class="form-group">
						<label class="control-label">Araç resimleri</label>
						<input id="aracResimler" name="aracResimler[]" type="file" multiple class="file-loading"> 
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
<script type="text/javascript">
$(document).on('ready', function() {
    $("#aracResimler").fileinput({
        overwriteInitial: true,
        maxFileSize: 200,        
        uploadUrl: '/',
         showUpload: false,
        initialCaption: "Arac resmi seçiniz"
    });
});
</script>