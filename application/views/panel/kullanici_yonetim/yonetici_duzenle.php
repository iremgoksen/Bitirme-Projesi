
<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
	    <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
	    <li><a href="<?php echo base_url(); ?>panel/yonetim_ayarlar"><i class="material-icons">people</i> Yöneticiler</a></li>
	    <li class="active"><i class="material-icons">edit</i> Yönetici Düzenle</li>
	</ol>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
		    <div class="header">
		        <h2>
		            Yönetici Düzenle
		        </h2>
		    </div>
		    <div class="body">
		        <form action="<?php echo base_url() ?>panel/Yonetim_ayarlar/yonetici_guncelle/<?php echo $yonetici->id ?>" method="POST" accept-charset="utf-8">
			        <div class="row clearfix">
			            <div class="col-sm-12">
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Ad</label>
			                        <input type="text" class="form-control" name="ad" value="<?php echo $yonetici->ad ?>"> 
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Soyad</label>
									<input type="text" class="form-control" name="soyad" value="<?php echo $yonetici->soyad ?>"> 
			                    </div>
			                </div>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Kullanıcı Adı</label>
									<input type="text" class="form-control" name="kullaniciAdi" value="<?php echo $yonetici->kullaniciAdi ?>">
			                    </div>
			                </div>
			                <?php if(($yonetici->kullaniciAdi != "ofosoft")){ ?>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Şifre</label>
									<input type="password" class="form-control" name="sifre" value="<?php echo $yonetici->sifre ?>">
			                    </div>
			                </div>
			                <?php } ?>
			                <div class="form-group">
			                    <div class="form-line">
			                    	<label>Mail</label>
									<input type="text" class="form-control" name="mail" value="<?php echo $yonetici->mail ?>"> 
			                    </div>
			                </div>
			                <div class="form-group"> 
								<button type="submit" class="btn btn-oval btn-primary">Kaydet</button> 
							</div>
			            </div>
			        </div>
		        </form>
    		</div>
		</div>
	</div>
</div>