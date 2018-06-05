<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="index,follow" />
  <meta name="theme-color" content="#FF9800">
	<title><?php echo $ayarlar->siteBaslik; ?></title>
  <base href="<?php echo base_url(); ?>">
	<meta name="description" content="<?php echo $ayarlar->siteAciklama; ?>">
	<meta name="keywords" content="<?php echo $ayarlar->siteAnahtarKelimeler; ?>">
	<meta name="author" content="<?php echo $ayarlar->firmaAdi; ?>">
  <!-- Google Fonts
  ============================================ -->    
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800' rel='stylesheet' type='text/css'>
   
  <!-- Bootstrap CSS
  ============================================ -->    
  <link rel="stylesheet" href="<?php echo base_url("public/css/bootstrap.css") ?>">
      
  <!-- Fontawsome CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/font-awesome.min.css") ?>">
      
  <!-- Owl Carousel CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/owl.carousel.css") ?>">
      
  <!-- jquery-ui CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/jquery-ui.css") ?>">
      
  <!-- Meanmenu CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/meanmenu.min.css") ?>">
      
  <!-- Animate CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/animate.css") ?>">
      
  <!-- Nivo slider CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/lib/nivo-slider/css/nivo-slider.css") ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url("public/lib/nivo-slider/css/preview.css") ?>" type="text/css" media="screen" />
      
  <!-- Metarial Iconic Font CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/material-design-iconic-font.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("public/css/material-design-iconic-font.min.css") ?>">
      
  <!-- Slick CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/slick.css") ?>">
      
  <!-- Style CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/style.css") ?>">
      
  <!-- Responsive CSS
  ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url("public/css/responsive.css") ?>">
      
  <!-- Modernizr JS
  ============================================ -->    
  <script src="<?php echo base_url("public/js/vendor/modernizr-2.8.3.min.js");?>"></script>

  <script src="https://apis.google.com/js/platform.js" async defer>
    {lang: 'tr'}
  </script>
  <script type="text/javascript" src="https://rawgit.com/kimmobrunfeldt/progressbar.js/1.0.0/dist/progressbar.js"></script>
</head>
<body>

 <header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
                    <span>Aklınıza Takılan Bir Şey Mi Var ?
                      <a href="tel:<?php echo $ayarlar->firmaMobil ?>">
                        <?php echo $ayarlar->firmaMobil; ?>
                          
                      </a>
                    </span>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                    <div class="header-top-right">
                         <?php if($this->session->userdata("kullanici")){ ?>
                         <div class="content"><a href="#"><i class="zmdi zmdi-account"></i> Hesabım</a>
                              <ul class="account-dropdown">
                                  <li><a  href="<?php echo base_url("hesap/") ?>">Hesabım</a></li>
                                  <li><a  href="<?php echo base_url("anket/") ?>">Anketler</a></li>
								  <li><a  href="<?php echo base_url("anket/muhendislik_sonuc") ?>">Anket Sonuçları</a></li>
                                  <li><a  href="<?php echo base_url("hesap/cikis") ?>">Çıkış</a></li>
                              </ul>
                          </div>
                         <?php }else{ ?>
                           <div class="content"><a href="#"><i class="zmdi zmdi-account"></i> Hesabım</a>
                              <ul class="account-dropdown">
                                  <li><a  href="<?php echo base_url("hesap/giris") ?>">Giriş Yap</a></li>
                                  <li><a  href="<?php echo base_url("hesap/kayit") ?>">Kayıt Ol</a></li>
                              </ul>
                          </div>
                         <?php } ?>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logo-menu sticker">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="logo">
                        <a href="<?php echo base_url() ?>">
                          <img src="<?php echo base_url("public/admin/uploads/$ayarlar->firmaLogo") ?>" alt="<?php echo $ayarlar->firmaAdi ?>">
                        </a>
                    </div>
                </div>
                <div class="col-md-9 hidden-sm hidden-xs">
                    <div class="mainmenu-area">
                        <div class="mainmenu">
                            <nav>
                              <ul id="nav">
                                  <li class="<?php echo ($this->router->fetch_class() == "Anasayfa") ? 'current':'' ?>">
                                    <a href="<?php echo base_url() ?>">Anasayfa</a>
                                  </li>

                                  <?php foreach ($sayfalar as $sayfa) { 
                                    
                                      if($sayfa->sayfaDurum == 1 && $sayfa->sayfaTipi == 0){ ?>

                                        <li>
                                          <a href="<?php echo base_url("kurumsal/$sayfa->sayfaId/").url_title($sayfa->sayfaBaslik) ?>">
                                              <?php echo $sayfa->sayfaBaslik ?>
                                          </a>
                                        </li>
                                  
                                  <?php }

                                  } ?>

                                  <li class="<?php echo ($this->router->fetch_class() == "Kurumsal") ? 'current':'' ?>">
                                  <a href="#">Kurumsal</a>
                                      <ul class="sub-menu">
                                        <?php foreach ($sayfalar as $sayfa){ 
                                           if($sayfa->sayfaDurum==1 && $sayfa->sayfaTipi == 1){
                                          ?>
                                          
                                            <li>
                                              <a href="<?php echo base_url("kurumsal/$sayfa->sayfaId/").url_title($sayfa->sayfaBaslik) ?>">
                                                <?php echo $sayfa->sayfaBaslik; ?>  
                                              </a>
                                            </li>
                                          
                                        <?php } 
                                        } ?> 
                                      </ul>
                                  </li>

                                  <li class="<?php echo ($this->router->fetch_class() == "Duyurular") ? 'current':'' ?>">
                                    <a href="<?php echo base_url("duyurular") ?>">Duyurular</a>
                                  </li>
                                  <li class="<?php echo ($this->router->fetch_class() == "blog") ? 'current':'' ?>">
                                    <a href="<?php echo base_url("blog") ?>">Bloglar</a>
                                  </li>
                                  <li class="<?php echo ($this->router->fetch_class() == "iletisim") ? 'current':'' ?>">
                                    <a href="<?php echo base_url("iletisim") ?>">İletişim</a>
                                  </li>
                              </ul>
                            </nav>
                        </div>
                        <!--<ul class="header-search">
                            <li class="search-menu">
                                <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                            </li>
                        </ul>

                        <div class="search">
                            <div class="search-form">
                                <form id="search-form" action="#">
                                    <input type="search" placeholder="Arama..." name="search" />
                                    <button type="submit">
                                        <span><i class="fa fa-search"></i></span>
                                    </button>
                                </form>                                
                            </div>
                        </div>
                        End of Search Form-->
                    </div> 
                </div>
            </div>
        </div>
    </div>  
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                                 <?php foreach ($sayfalar as $sayfa) { 
                                    
                                      if($sayfa->sayfaDurum == 1 && $sayfa->sayfaTipi == 0){ ?>

                                        <li>
                                          <a href="<?php echo base_url("kurumsal/$sayfa->sayfaId/").url_title($sayfa->sayfaBaslik) ?>">
                                              <?php echo $sayfa->sayfaBaslik ?>
                                          </a>
                                        </li>
                                  
                                  <?php }

                                  } ?>
                                <li class="<?php echo ($this->router->fetch_class() == "Duyurular") ? 'current':'' ?>">
                                  <a href="<?php echo base_url("duyurular") ?>">Duyurular</a>
                                </li>
                                <li class="<?php echo ($this->router->fetch_class() == "blog") ? 'current':'' ?>">
                                  <a href="<?php echo base_url("blog") ?>">Bloglar</a>
                                </li>
                                <li class="<?php echo ($this->router->fetch_class() == "iletisim") ? 'current':'' ?>">
                                  <a href="<?php echo base_url("iletisim") ?>">İletişim</a>
                                </li>
                            </ul>
                        </nav>
                    </div>          
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area end -->    
</header>




