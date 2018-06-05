<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/sayfa_yonetim/"><i class="material-icons">content_copy</i> Sayfalar</a></li>
	    <li class="active"><i class="material-icons">add</i>Sayfa Ekle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Sayfa Ekle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url("panel/sayfa_yonetim/sayfa_ekle") ?>" method="POST" accept-charset="utf-8">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Sayfa Başlık</label> 
							<input type="text" class="form-control" name="sayfaBaslik" placeholder="örn:Misyonumuz" required=""> 
						</div>
					</div>
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Sayfa Kategorisi</label> 							
							<select name="sayfaTipi" class="form-control">
							 		<option value="0">Anasayfa</option>
							 		<option value="1">Kurumsal</option>
							 </select> 
						</div>
					</div>
					<div class="form-group"> 
						<label class="control-label">Sayfa Durumu</label> 
					 	<div class="switch">
                            <label>Kapalı<input type="checkbox" checked="" name="sayfaDurum"><span class="lever"></span>Açık</label>
                        </div>
					</div>

					<div class="form-group">
							<label class="control-label">Sayfa İçerik</label> 
							<textarea id="tinymce" name="sayfaIcerik">sayfa içeriğini tasarlayınız!</textarea>

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