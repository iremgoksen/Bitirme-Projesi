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
                    <h1 class="text-center">Giriş</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                            <li>Giriş</li>
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
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 login_form">
				<form action="<?php echo base_url("hesap/giris_yap") ?>" method="POST">
					<div class="form_group">
						<label>Kullanıcı Tc Kimlik No</label>
						<div class="input_group">
							<input type="text" placeholder="Kullanıcı Tc Kimlik No" name="kullaniciTckNo" required="">
						</div> <!-- End of .input_group -->
					</div> <!-- End of .form_group -->

					<div class="form_group">
						<label>Şifre</label>
						<div class="input_group">
							<input type="password" placeholder="********" name="sifre" required=""  minlength="3">
						</div> <!-- End of .input_group -->
					</div> <!-- End of .form_group -->

					<!--<div class="clear_fix">
						<a href="#" class="float_right">Forgot Password?</a>
					</div>-->
					<button class="button-default">Giriş Yap</button>
				</form>
			</div> <!-- End of .login_form -->


            <?php if($this->session->flashdata("mesaj")){?>
            <div class="alert bg-red animated shake">
                    <?php echo $this->session->flashdata("mesaj"); ?>
            </div>
            <?php } ?>
		</div> <!-- End of .row -->
	</div> <!-- End of .container -->
</div> <!-- End of .account_page -->