<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- İletişim --> <!--Breadcrumb Banner Area Start-->
        <div class="breadcrumb-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-text">
                            <h1 class="text-center">İletişim</h1>
                            <div class="breadcrumb-bar">
                                <ul class="breadcrumb">
                                    <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                                    <li>İletişim</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb Banner Area-->
        <!--Google Map Area Start-->
        <div class="google-map-area" style="margin-top: 10px;">
            <!--  Map Section -->
            <div id="contacts" class="map-area">
            <iframe src="<?php echo $ayarlar->firmaGoogleMaps ?>" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>

               
            </div>
        </div>
        <!--End of Google Map Area-->
        <!--Contact Form Area Start-->
        <div class="contact-form-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="contact-title">İletişim Bilgilerimiz</h4>
                        <div class="contact-text">
                            <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text"><?php echo $ayarlar->firmaMobil ?></span></p>
                            <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text"><?php echo $ayarlar->firmaMail ?></span></p>
                            <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text"><?php echo $ayarlar->firmaAdres ?></span></p>
                        </div>
                        <h4 class="contact-title">Sosyal Medya</h4>
                        <div class="link-social">
                            <a href="<?php echo $ayarlar->firmaFacebook ?>" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="<?php echo $ayarlar->firmaGplus ?>" target="_blank"><i class="zmdi zmdi-google-plus"></i></a>
                            <a href="<?php echo $ayarlar->firmaTwitter ?>" target="_blank"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="<?php echo $ayarlar->firmaInstagram ?>" target="_blank"><i class="zmdi zmdi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h4 class="contact-title">Bize Yazın</h4>
                        <form action="<?php echo base_url("mesaj/mesaj_gonder/") ?>" method="post" onsubmit="alert('Mesajınız Başarılı Olarak İletilmiştir.')">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="ad" placeholder="Ad Soyad">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="mail" placeholder="Mail">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="konu" placeholder="Konu">
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="telNo" placeholder="Tel No">
                                </div>
                                <div class="col-md-12">
                                	<input type="hidden" name="firmaMail" value="<?php echo $ayarlar->firmaMail; ?>" >
                                    <textarea name="mesaj" cols="30" rows="10" placeholder="Mesaj"></textarea>
                                    <button type="submit" class="button-default">Gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Contact Form-->
<!-- /İletişim -->	  	  
