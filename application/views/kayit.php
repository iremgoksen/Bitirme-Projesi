<section class="breadcrumb-area" style="background-image:url(<?php echo base_url("public/images/background/2.jpg") ?>);">
    
 <!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">Kayıt</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                            <li>Kayıt</li>
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
					<h2>Kayit Ol</h2>
				</div>
				<form action="<?php echo base_url("hesap/kayit_ol") ?>" method = "post" onsubmit="alert('Kayıt İşleminiz Gerçekleştirilmiştir.')">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form_group">
        						<label>Tc Kimlik No</label>
        						<div class="input_group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
						<input name="kullaniciTckNo" type="number" id="tckimlikno" onblur="tckimlikkontorolu(this);" maxlength="11" required="" />
        						<span  id="tcNoUyari"></span>	
        							
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
        					<div class="form_group">
        						<label>Ad</label>
        						<div class="input_group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
        							<input type="text" name="ad" required="">
        							
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
        					<div class="form_group">
        						<label>Kullanıcı Adı</label>
        						<div class="input_group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
        							<input type="text" name="kullaniciAd" required="">
        							
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form_group">
        						<label>Mail</label>
        						<div class="input_group">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
        							<input type="email" name="email" required="">
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
        					<div class="form_group">
        						<label>Soyad</label>
        						<div class="input_group">
                                    <i class="fa fa-user" aria-hidden="true"></i>
        							<input type="text" name="soyad" required="">
        							
        						</div> <!-- End of .input_group -->
        					</div> <!-- End of .form_group -->
                            <div class="form_group">
                                <label>Şifre</label>
                                <div class="input_group">
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                    <input type="password" name="sifre" required="">
                                    
                                </div> <!-- End of .input_group -->
                            </div> <!-- End of .form_group -->
						</div>
					</div> <!-- End of .row -->
					<button class="color1_bg tran3s uyeOl button-default">Kayit Ol</button>
				</form>
			</div> <!-- End of .register_form -->
			<h5 clas="text-center"><?php echo $this->session->flashdata("mesaj"); ?></h5>
		</div> <!-- End of .row -->
	</div> <!-- End of .container -->
</div> <!-- End of .account_page -->

<script>
function tckimlikkontorolu(tcno) {
	var tckontrol,toplam; tckontrol = tcno; tcno = tcno.value; toplam = Number(tcno.substring(0,1)) + Number(tcno.substring(1,2)) +
	Number(tcno.substring(2,3)) + Number(tcno.substring(3,4)) +
	Number(tcno.substring(4,5)) + Number(tcno.substring(5,6)) +
	Number(tcno.substring(6,7)) + Number(tcno.substring(7,8)) +
	Number(tcno.substring(8,9)) + Number(tcno.substring(9,10));
	strtoplam = String(toplam); onunbirlerbas = strtoplam.substring(strtoplam.length,strtoplam.length-1);

	if(onunbirlerbas == tcno.substring(10,11)) {
		alert("Tc No Doğru");
	} else{
		alert("Tc No Yanlış");
	}
}
</script>