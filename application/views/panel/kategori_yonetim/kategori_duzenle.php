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
	    <li><a href="<?php echo base_url(); ?>panel/kategori_yonetim/"><i class="material-icons">home</i> Kategoriler</a></li>
	    <li class="active"><i class="material-icons">edit</i>Kategori Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Kategori Düzenle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/kategori_yonetim/kategori_guncelle/<?php echo $kategori->kategoriId ."/".$kategori->kategoriTipi ;?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Katergori Adı</label> 
							<input type="text" class="form-control" name="kategoriAdi" placeholder="kategori Adı" required="" value="<?php echo $kategori->kategoriAdi; ?>"> 
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
<!-- the fileinput plugin initialization -->
<script>
var btnCust = ''; 
$("#avatar-2").fileinput({
    overwriteInitial: true,
    maxFileSize: 1500,
    showClose: false,
    showCaption: false,
    showBrowse: false,
    browseOnZoneClick: true,
    removeLabel: '',
    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-2',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="<?php echo base_url() ?>public/admin/<?php echo isset($kategori->kategoriResim)?"uploads/".$kategori->kategoriResim :"images/img_upload.png" ?>" alt="Haber" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>