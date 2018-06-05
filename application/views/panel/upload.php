<form action="<?php echo base_url() ?>panel/giris_yonetim/resim_yukle" method="POST" accept-charset="utf-8"  enctype="multipart/form-data">
	<div class="form-group"> 
		<!-- the avatar markup -->
		<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
	    <div class="kv-avatar" style="width:200px">
	        <input id="resim" name="resim" type="file" class="file-loading">
	    </div>
	</div>

	<div class="form-group"> 
		<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
	</div>
</form>

<script type="text/javascript">
$(document).on('ready', function() {
   $("#resim").fileinput({
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
    defaultPreviewContent: '<img src="<?php echo base_url()?>public/admin/images/img_upload.png" alt="Haber" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  '' + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
});
</script>