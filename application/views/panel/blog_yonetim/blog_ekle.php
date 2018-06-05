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
	    <li><a href="<?php echo base_url("panel"); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url("panel/blog_yonetim"); ?>"><i class="material-icons">rate_review</i> Blog Listesi</a></li>
	    <li class="active"><i class="material-icons">add</i>Blog Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Blog Ekle
		        </h2>
		    </div>

		    <div class="body">
		    	 <form action="<?php echo base_url("panel/blog_yonetim/blog_ekle") ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
										<div class="form-group">
										 	<div class="form-line"> 
												<label class="control-label" >Blog Başlık</label> 
												<input type="text" class="form-control" name="blogBaslik" placeholder="örn:Web sitemiz yayınlandı" required=""> 
											</div>
										</div>
										<div class="form-group"> 
											<label class="control-label">Blog Durumu</label> 
										 	<div class="switch">
					                            <label>Kapalı<input type="checkbox" checked="" name="blogDurum"><span class="lever"></span>Açık</label>
					                        </div>
										</div>

										<div class="form-group"> 
											<label class="control-label">Blog Resimi</label> 
										 	<!-- the avatar markup -->
											<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
										    <div class="kv-avatar" style="width:200px">
										        <input id="avatar-2" name="blogResim" type="file" class="file-loading">
										    </div>
										 <!-- the fileinput plugin initialization -->
										</div>
										
										
										<div class="form-group">
												<label class="control-label">Blog İçerik</label> 
												<textarea id="tinymce" name="blogIcerik">Sayfa içeriğini tasarlayınız!</textarea>

										</div>
										<div class="form-group"> 
											<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
										</div>
								</form>
		    </div>



			<div class="body">
		        <!-- Nav tabs -->
		        <ul class="nav nav-tabs tab-nav-right" role="tablist">
		            <li role="presentation" class="">
		            	<a href="#home_animation_2" data-toggle="tab" aria-expanded="false">Türkçe</a>
		            </li>
		            <li role="presentation" class="active">
		            	<a href="#profile_animation_2" data-toggle="tab" aria-expanded="true">İngilizce</a>
		            </li>
		        </ul>

		        <!-- Tab panes -->
		        <div class="tab-content">
		            <div role="tabpanel" class="tab-pane animated fadeInRight" id="home_animation_2">	                
		            	<p>
		                   
		                </p>
		            </div>
		            <div role="tabpanel" class="tab-pane animated fadeInRight active" id="profile_animation_2">
		                <p>
		                    <form action="<?php echo base_url("panel/blog_yonetim/blog_ekle") ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
									<div class="form-group">
									 	<div class="form-line"> 
											<label class="control-label" >Blog Başlık</label> 
											<input type="text" class="form-control" name="blogBaslik" placeholder="örn:Web sitemiz yayınlandı" required=""> 
										</div>
									</div>
									<div class="form-group"> 
										<label class="control-label">Blog Durumu</label> 
									 	<div class="switch">
				                            <label>Kapalı<input type="checkbox" checked="" name="blogDurum"><span class="lever"></span>Açık</label>
				                        </div>
									</div>

									<div class="form-group"> 
										<label class="control-label">Blog Resimi</label> 
									 	<!-- the avatar markup -->
										<div id="kv-avatar-errors-2" style="width:800px;display:none"></div>
									    <div class="kv-avatar" style="width:200px">
									        <input id="avatar-2" name="blogResim" type="file" class="file-loading">
									    </div>
									 <!-- the fileinput plugin initialization -->
									</div>
									
									
									<div class="form-group">
											<label class="control-label">Blog İçerik</label> 
											<textarea id="tinymce" name="blogIcerik">Sayfa içeriğini tasarlayınız!</textarea>

									</div>
									<div class="form-group"> 
										<button type="submit" class="btn btn-oval btn-primary">Ekle</button> 
									</div>
							</form>
		                </p>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/tinymce.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/pages/forms/editors.js"></script>

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
    defaultPreviewContent: '<img src="<?php echo base_url() ?>/public/admin/images/img_upload.png" alt="blog" style="width:160px"><h6 class="text-muted">Seçmek için tıklayınız</h6>',
    layoutTemplates: {main2: '{preview} ' +  '' + ' {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
</script>