<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url("panel"); ?>"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url("panel/sayfa_yonetim"); ?>"><i class="material-icons">content_copy</i> Sayfalar</a></li>
	    <li class="active"><i class="material-icons">edit</i>Sayfa Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Sayfa Düzenle
		        </h2>
		    </div>
		    <div class="body">
		    <form id="my_form" action="/upload/" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden"><input name="image" type="file" onchange="$('#my_form').submit();this.value='';"></form>
	
			<form action="<?php echo base_url("panel/Sayfa_yonetim/sayfa_guncelle/$sayfa->sayfaId") ?>" method="POST" accept-charset="utf-8">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Sayfa Başlık</label> 
							<input type="text" class="form-control" name="sayfaBaslik" placeholder="Sayfa başlık" required="" value="<?php echo $sayfa->sayfaBaslik; ?>"> 
						</div>
					</div>
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Sayfa Kategorisi</label> 							
							<select name="sayfaTipi" class="form-control">
							 		<option value="0" 
							 		<?php echo ($sayfa->sayfaTipi == 0) ? "selected":""?>>
							 			Anasayfa
							 		</option>
							 		<option value="1" 
							 		<?php echo ($sayfa->sayfaTipi == 1) ? "selected":""?> >
							 		Kurumsal</option>
							 </select> 
						</div>
					</div>
					<div class="form-group"> 
						<label class="control-label">Sayfa Durumu</label> 
					 	<div class="switch">
                            <label>Kapalı<input type="checkbox" <?php echo $sayfa->sayfaDurum == 1 ? 'checked':''?> name="sayfaDurum"><span class="lever" ></span>Açık</label>
                        </div>
					</div>
					<div class="form-group">
							<label class="control-label">Sayfa İçerik</label> 
							<textarea id="tinymce" name="sayfaIcerik"><?php echo $sayfa->sayfaIcerik; ?></textarea>
					</div>
					<div class="form-group"> 
						<button type="submit" class="btn btn-oval btn-primary">Düzenle</button> 
					</div>
			</form>

			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/jquery.tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/plugins/tinymce/tinymce.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/pages/forms/editors.js"></script>