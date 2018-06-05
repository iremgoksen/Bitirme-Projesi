<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/yorum_yonetim/"><i class="material-icons">comment</i> Yorum Listesi</a></li>
	    <li class="active"><i class="material-icons">edit</i> Yorum Düzenle</a></li>
	</ol>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Yorum Düzenle
		        </h2>
		    </div>
		    <div class="body">
	
			<form action="<?php echo base_url() ?>panel/yorum_yonetim/yorum_guncelle/<?php echo $yorum->yorumId ?>" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Ad Soyad</label> 
							<input type="text" class="form-control" name="yorumAd" placeholder="" value="<?php echo $yorum->yorumAd ?>" required=""> 
						</div>
					</div>
					<div class="form-group">
					 	<div class="form-line"> 
							<label class="control-label" >Yorum Başlık</label> 
							<input type="text" class="form-control" name="yorumBaslik" placeholder="örn:Web sitemiz yayınlandı" value="<?php echo $yorum->yorumBaslik ?>" required=""> 
						</div>
					</div>
					<div class="form-group"> 
						<label class="control-label">Yorum Anasayfada Gösterilsin mi ?</label> 
					 	<div class="switch">
                            <label>Hayır<input type="checkbox" <?php echo $yorum->yorumDurum == 1 ?'checked':'' ?> name="yorumDurum"><span class="lever"></span>Evet</label>
                        </div>
					</div>

					<div class="form-group">
					 <div class="form-line"> 
						<label class="control-label">Yorum İçerik</label> 
						<input type="text" class="form-control" name="yorumIcerik" placeholder="örn:Web sitemiz yayınlandı" value="<?php echo $yorum->yorumIcerik ?>" required="">
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