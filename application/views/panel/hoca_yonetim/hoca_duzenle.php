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
	    <li><a href="<?php echo base_url(); ?>panel/hoca_yonetim/"><i class="material-icons">people</i>Hoca Listesi</a></li>
	    <li class="active"><i class="material-icons">edit</i>Hoca Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Hoca Düzenle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/hoca_yonetim/hoca_guncelle/<?php echo $hoca->hocaId ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Hoca Ad Soyad</label> 
							<input type="text" class="form-control" name="hocaAd" placeholder="örn:Hoca Ad" value="<?php echo $hoca->hocaAd ?>" required=""> 
						</div>
					</div>

					<div class="form-group"> 
						<label class="control-label">Hoca Resmi</label> 
					 	<!-- the avatar markup -->
						<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
					    <div class="kv-avatar" style="width:200px">
					        <input id="avatar-2" name="hocaResim" type="file" class="file-loading">
					    </div>
					 <!-- the fileinput plugin initialization -->
					</div>
					
					<div class="form-group">					
					 	<div class="form-line"> 
						<label class="control-label">Hoca İçerik</label> 
						<input type="text" class="form-control" name="hocaIcerik" placeholder="örn:Çiçek Abbas" value="<?php echo $hoca->hocaIcerik ?>" required="">
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

<script>
var btnCust = ''; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 200000,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Seçimi iptal et',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="<?php echo base_url() ?>public/admin/uploads/<?php echo isset($hoca->hocaResim)?  $hoca->hocaResim : "images/img_upload.png"?>" alt="hoca" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>