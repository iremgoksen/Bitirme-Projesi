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
	    <li class="active"><i class="material-icons">person</i> Site Yönetimi</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Site Ayarları
		        </h2>
		    </div>
		    <div class="body">
				<form action="<?php echo base_url() ?>panel/site_ayarlar/site_ayarlari_kaydet" method="POST" enctype="multipart/form-data" >
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Site Başlık*</label> 
							<input type="text" class="form-control" name="siteBaslik" required="" value="<?php echo isset($ayarlar) ? $ayarlar->siteBaslik : "" ?>" placeholder="">
						</div> 
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Anahtar Kelimeler*:</label> 
							<input type="text" class="form-control" id="keywords" name="siteAnahtarKelimeler" required="" value="<?php echo isset($ayarlar) ? $ayarlar->siteAnahtarKelimeler : "" ?>" data-role="tagsinput" > 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Site Açıklama (description)*</label> 
							<input type="text" class="form-control" name="siteAciklama" required="" value="<?php echo isset($ayarlar) ? $ayarlar->siteAciklama : "" ?>"> 
						</div>
					</div>
					<div class="form-group">  
						<label class="control-label">Firma Logo*</label> 
						<!-- the avatar markup -->
						<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
					    <div class="kv-avatar" style="width:200px">
					        <input id="avatar-2" name="firmaLogo" type="file" class="file-loading">
					    </div>
				       
					</div>
				
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma Adı*</label> 
							<input type="text" class="form-control" name="firmaAdi" required="" value="<?php echo isset($ayarlar) ? $ayarlar->firmaAdi : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma Telefon</label> 
							<input type="number" class="form-control" name="firmaTel" value="<?php echo isset($ayarlar) ? $ayarlar->firmaTel : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma Cep*</label> 
							<input type="tel" class="form-control" name="firmaMobil" required="" value="<?php echo isset($ayarlar) ? $ayarlar->firmaMobil : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma Fax</label> 
							<input type="number" class="form-control" name="firmaFax" value="<?php echo isset($ayarlar) ? $ayarlar->firmaFax : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma E-mail</label> 
							<input type="email" class="form-control" name="firmaMail" value="<?php echo isset($ayarlar) ? $ayarlar->firmaMail : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Firma Adres</label> 
							<input type="text" class="form-control" name="firmaAdres" value="<?php echo isset($ayarlar) ? $ayarlar->firmaAdres : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Google Maps</label> 
							<input type="text" class="form-control" name="firmaGoogleMaps" value="<?php echo isset($ayarlar) ? $ayarlar->firmaGoogleMaps : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Google Analytics</label> 
							<input type="text" class="form-control" name="firmaGoogleAnalytics" value="<?php echo isset($ayarlar) ? $ayarlar->firmaGoogleAnalytics : "" ?>">
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Facebook Sayfa URL</label> 
							<input type="text" class="form-control" name="firmaFacebook" value="<?php echo isset($ayarlar) ? $ayarlar->firmaFacebook : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Twitter Sayfa URL</label> 
							<input type="text" class="form-control" name="firmaTwitter" value="<?php echo isset($ayarlar) ? $ayarlar->firmaTwitter : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Gplus Sayfa URL</label> 
							<input type="text" class="form-control" name="firmaGplus" value="<?php echo isset($ayarlar) ? $ayarlar->firmaGplus : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Instagram Sayfa URL</label> 
							<input type="text" class="form-control" name="firmaInstagram" value="<?php echo isset($ayarlar) ? $ayarlar->firmaInstagram : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Youtube Sayfa URL</label> 
							<input type="text" class="form-control" name="firmaYoutube" value="<?php echo isset($ayarlar) ? $ayarlar->firmaYoutube : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<div class="form-line">
							<label class="control-label">Copyright Metni</label> 
							<input type="text" class="form-control" name="firmaCopyright" value="<?php echo isset($ayarlar) ? $ayarlar->firmaCopyright : "" ?>"> 
						</div>
					</div>
					<div class="form-group"> 
						<button type="submit" class="btn btn-primary">Kaydet</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

<!-- the fileinput plugin initialization -->
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
    defaultPreviewContent: '<img src="<?php echo isset($ayarlar)?base_url().'public/admin/uploads/'.$ayarlar->firmaLogo:base_url().'public/admin/images/img_upload.png';?>" alt="Haber" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  '' + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});

<?php if($this->session->flashdata("mesaj")!=NULL){?>
$.notify("<?php echo $this->session->flashdata('mesaj')['icerik']; ?>", {
    type: '<?php echo $this->session->flashdata('mesaj')['tip']; ?>',
    animate: {
        enter: 'animated zoomInRight',
        exit: 'animated zoomOutRight'
    }
});
<?php } ?>
</script>