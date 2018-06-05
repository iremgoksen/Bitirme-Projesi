<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<section class="breadcrumb-area" style="background-image:url(<?php echo base_url("public/images/background/2.jpg") ?>);">
    
 <!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Hesabım</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                            <li>Hesap</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->


<!-- Account Page Content*********************** -->
<div class="contact-form-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 register_form">
				<div class="theme-title">
					<h2>Hesabım</h2>
				</div>
				<form method="post" action="<?php echo base_url("hesap/profil_guncelle") ?>" onsubmit="alert('Profiliniz Güncellenmiştir.')">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form_group">
        						<label>Kullanıcı Adı</label>
        						<div class="input_group">
        							<input type="text" name="kullaniciTckNo" value="<?php echo $kullanici->kullaniciTckNo ?>">
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->

        					<div class="form_group">
        						<label>Ad</label>
        						<div class="input_group">
        							<input type="text"  name="ad" value="<?php echo $kullanici->ad ?>">
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->

        					<div class="form_group">
        						<label>Mail</label>
        						<div class="input_group">
        							<input type="email"  name="mail" value="<?php echo $kullanici->email ?>">
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form_group">
        						<label>Şifre</label>
        						<div class="input_group">
        							<input type="password" name="sifre" value="<?php echo $kullanici->kullaniciSifre ?>">
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->

        					<div class="form_group">
        						<label>Soyad</label>
        						<div class="input_group">
        							<input type="text" name="soyad" value="<?php echo $kullanici->soyad ?>" >
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->

						</div>
					</div> <!-- End of .row -->
					<button class="button-default">Güncelle</button>
					
				</form>
			</div> <!-- End of .register_form -->
			
			
		</div> <!-- End of .row -->
	</div> <!-- End of .container -->
</div> <!-- End of .account_page -->