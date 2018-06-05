<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
  <!-- Slider Alanı   -->

   <div class="slider-area">
      <div class="preview-2">
          <div id="nivoslider" class="slides">
             <?php foreach ($slider as $resim){ ?>  
              <img src="<?php echo base_url("public/admin/uploads/$resim->sliderResim") ?>" alt="" title="#slider-1-caption1"/>
              <?php } ?>
          </div> 
          <?php foreach ($slider as $i=>$resim){ ?>  

          <div id="slider-1-caption<?php echo $i ?>" class="nivo-html-caption nivo-caption">
              <div class="banner-content slider-1">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="text-content-wrapper">
                                  <div class="text-content">
                                      <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s"><?php echo $resim->sliderBaslik ?></h1>
                                      <p class="sub-title wow fadeInUp hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> <?php echo $resim->sliderAciklama ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>  

          <?php } ?>  
      </div>
  </div>

  <!--#Slider Alanı-->
  
  <!--İstatistik Alanı-->
  <div class="fun-factor-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper white">
                      <div class="section-title">
                          <h3>İstatistikler</h3>
                          <p>Projemizin Güncel istatistik bilgileri</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <?php foreach ($istatistikler as $istatistik){ ?>
            <div class="col-md-3 col-sm-3">
                <div class="single-fun-factor">
                    <h4><?php echo $istatistik->istatistikAd ?></h4>
                    <h2><span class="counter"><?php echo $istatistik->istatistikDeger ?></span>+</h2>
                </div>
            </div>
        <?php } ?>
          </div>
      </div>
  </div>
  <!--#istatistik Alanı-->

  <!-- Duyurular Alanı --> 
  <div class="latest-area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper">
                      <div class="section-title">
                          <h3>Duyurular</h3>
                          <p>There are many variations of passages</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <?php foreach ($duyurular as $duyuru){ ?>
              <div class="col-md-6">
                  <div class="single-latest-item">
                      <div class="single-latest-image">
                          <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>"><img src="<?php echo base_url("public/admin/uploads/$duyuru->duyuruResim") ?>" alt="<?php echo $ayarlar->firmaAdi ?>" class="news_img"></a>
                      </div>
                      <div class="single-latest-text">
                          <h3><a href="#"><?php echo $duyuru->duyuruBaslik ?></a></h3>
                          <div class="single-item-comment-view">
                             <span><i class="zmdi zmdi-calendar-check"></i><?php echo $duyuru->tarih ?></span>
                             <span><i class="zmdi zmdi-eye"></i>59</span>
                         </div>
                         <p><?php echo (strlen($duyuru->duyuruIcerik) > 100 ? substr($duyuru->duyuruIcerik, 0,100)."..." : $duyuru->duyuruIcerik) ?> </p>
                         <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>" class="button-default">Devamını Oku</a>
                      </div>
                  </div>
              </div>
              <?php } ?>

            <div class="col-md-12 col-sm-12 text-center">
                <a href="<?php echo base_url("duyurular") ?>" class="button-default button-large">Bütün Duyurulara Gözat <i class="zmdi zmdi-chevron-right"></i></a>
            </div>
          </div>
      </div>
  </div>
  <!-- #Duyurular Alanı -->  


<!--Sözler Alanı-->
  <div class="testimonial-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                  <div class="row">
                      <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                          <div class="testimonial-image-slider text-center">
                            <?php foreach ($hocalar as $hoca){ ?>

                              <div class="sin-testiImage">
                                  <img src="<?php echo base_url("public/admin/uploads/$hoca->hocaResim") ?>" alt="<?php echo $ayarlar->firmaAdi ?>" />
                              </div>

                            <?php } ?>
                          </div>
                      </div>
                  </div> 
                  <div class="testimonial-text-slider text-center">
                    <?php  foreach ($hocalar as $hoca){ ?>

                      <div class="sin-testiText">
                          <h2><?php echo $hoca->hocaAd ?> </h2>
                          <p><?php echo $hoca->hocaIcerik ?></p>
                      </div>
                    <?php } ?>
                  </div>   
              </div>
          </div>
      </div>
  </div>
<!--#Sözler Alanı-->

  <!--Blog Alanı-->
  <div class="event-area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title-wrapper">
                      <div class="section-title">
                          <h3>Bloglar</h3>
                          <p>There are many variations of passages</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <?php foreach ($bloglar as $blog) { ?>
              <?php 
                $aylar=array(' ', 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos','Eylül',  'Ekim',  'Kasım',  'Aralık');
                $tarih = explode("-",explode(" ", $blog->tarih)[0]);
                $tarih[1] = ($tarih[1] < 10 ? substr($tarih[1],1,2) : $tarih[1]);
              ?>
              <div class="col-md-4 col-sm-6">
                  <div class="single-event-item">
                      <div class="single-event-image">
                          <a title="<?php echo url_title($blog->blogBaslik); ?>" rel="bookmark" href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik); ?>">
                              <img src="<?php echo base_url("public/admin/uploads/$blog->blogResim") ?>" alt="">
                              <span><span><?php echo $tarih[2] ?></span><?php echo $aylar[$tarih[1]] ?></span>
                          </a>
                      </div>
                      <div class="single-event-text">
                          <h3><a title="<?php echo url_title($blog->blogBaslik); ?>" rel="bookmark" href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik); ?>"><?php echo $blog->blogBaslik ?></a></h3>
                          <div class="single-item-comment-view">
                             <span><i class="zmdi zmdi-time"></i>
                                  <?php echo $tarih[2]." ".$aylar[$tarih[1]]." ".$tarih[0] ?>
                             </span>
                             <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                         </div>
                         <p><?php echo (strlen($blog->blogIcerik) > 100 ? substr($blog->blogIcerik, 0,100)."..." : $blog->blogIcerik) ?></p>
                         <a class="button-default" href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>">Devamını Oku</a>
                      </div>
                  </div>
              </div>
          <?php } ?>
          <div class="col-md-12 col-sm-12 text-center">
              <a href="<?php echo base_url("blog") ?>" class="button-default button-large">Bütün bloglara gözat <i class="zmdi zmdi-chevron-right"></i></a>
          </div>
          </div>
      </div>
  </div>
  <!--#Blog Alanı-->





 <!-- Yorumlar 
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#yorumModal">Yorum Yaz</button>
  
    /Yorumlar -->
    
    <!-- Modal -->
    <div id="yorumModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Yeni Yorum</h4>
          </div>
          <div class="modal-body"> 
           <form class="form-horizontal" id="yorumForm">
            <p class="text-center">Yorumunuzu yayınlayabilmemiz için tüm alanları doldurunuz.</p>
           
            <div class="form-group">
              <label for="ad" class="control-label label-left col-xs-2">Ad * </label>
              <div class="col-xs-9">
                <input type="text" class="form-control" id="ad" placeholder=" Adınız" name="ad">
              </div>
            </div>
            <div class="form-group">
              <label for="konu" class="control-label label-left col-xs-2">Konu * </label>
              <div class="col-xs-9">
                <input type="text" class="form-control" id="konu" placeholder="Yorumunuz için bir başlık giriniz" name="baslik">
              </div>
            </div>
            <div class="form-group">
              <label for="mesaj" class="control-label label-left col-xs-2">Yorum * </label>
              <div class="col-xs-9">
                <textarea class="form-control" id="yorum" placeholder="Yorumunuzu yazınız..." name="yorum"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-offset-2 col-xs-9">
              <button class="btn btn-primary" type="" aria-invalid="false" id="yorumGonder">Gönder</button>
              </div>
            </div>
            <p class="text-center" id="sonuc"></p>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
          </div>
        </div>
      </form>
      </div>
    </div>
