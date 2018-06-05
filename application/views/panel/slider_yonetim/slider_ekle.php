<style>
.kv-avatar .file-preview-frame,.kv-avatar .file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar .file-input {
    display: table-cell;
    max-width: 220px;
}
</style>

<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/slider_yonetim/"><i class="material-icons">collections</i> Slide Listesi</a></li>
	    <li class="active"><i class="material-icons">add</i>Slide Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Slide Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url("panel/slider_yonetim/slider_ekle") ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Slide Başlık</label> 
							<input type="text" class="form-control" name="sliderBaslik" placeholder="örn:resim1" required=""> 
						</div>
					</div>

					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Slide Açıklama</label> 
							<input type="text" class="form-control" name="sliderAciklama" placeholder="örn:resim1" required=""> 
						</div>
					</div>

					<div class="form-group"> 
						<label class="control-label">Slide Resmi ( 1920*800 ) </label> 
					 	<!-- the avatar markup -->
						<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
					    <div class="kv-avatar" style="width:200px">
					        <input id="avatar-2" name="sliderResim" type="file" class="file-loading">
					    </div>
					 <!-- the fileinput plugin initialization -->
					</div>

					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>
<script>
var btnCust = '' +
    '</button>'; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 2000,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="<?php echo base_url() ?>/public/admin/images/img_upload.png" alt="slider" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>