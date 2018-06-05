<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url("panel"); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url("panel/duyuru_yonetim"); ?>"><i class="material-icons">notifications</i> Duyuru Listesi</a></li>
	    <li class="active"><i class="material-icons">add</i>Duyuru Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Duyuru Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url("panel/duyuru_yonetim/duyuru_ekle") ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Duyuru Başlık</label> 
							<input type="text" class="form-control" name="duyuruBaslik" placeholder="örn:Web sitemiz yayınlandı" required=""> 
						</div>
					</div>
					<div class="form-group"> 
						<label class="control-label">Duyuru Anasayfada Gösterilsin mi ?</label> 
					 	<div class="switch">
                            <label>Hayır<input type="checkbox" checked="" name="duyuruDurum"><span class="lever"></span>Evet</label>
                        </div>
					</div>

					<div class="form-group"> 
						<label class="control-label">Duyuru Resmi</label> 
					 	<!-- the avatar markup -->
						<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
					    <div class="kv-avatar" style="width:200px">
					        <input id="avatar-2" name="duyuruResim" type="file" class="file-loading">
					    </div>
					 <!-- the fileinput plugin initialization -->
					</div>

					<div class="form-group">
						<label class="control-label">Duyuru İçerik</label> 
						<textarea id="tinymce" name="duyuruIcerik"></textarea>
					</div>
					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url("public/admin/plugins/tinymce/jquery.tinymce.min.js"); ?>"></script>
<script src="<?php echo base_url("public/admin/plugins/tinymce/tinymce.js"); ?>"></script>
<script src="<?php echo base_url("public/admin/js/pages/forms/editors.js"); ?>"></script>

<script>
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 200,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="<?php echo base_url("public/admin/images/img_upload.png") ?>" alt="duyuru" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  '' + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>