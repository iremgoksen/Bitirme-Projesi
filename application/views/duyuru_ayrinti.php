 <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center"><?php echo $duyuru->duyuruBaslik ?></h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                              <li>Duyurular</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End of Breadcrumb Banner Area-->
  <?php 
    $aylar=array(' ', 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos','Eylül',  'Ekim',  'Kasım',  'Aralık');
    $tarih = explode("-",explode(" ", $duyuru->tarih)[0]);
    $tarih[1] = ($tarih[1] < 10 ? substr($tarih[1],1,2) : $tarih[1]);
  ?>
  <!--News Details Area Start-->
  <div class="news-details-area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-md-8">
                  <div class="news-details-content">
                     <div class="single-latest-item">
                          <img src="<?php echo base_url("public/admin/uploads/$duyuru->duyuruResim") ?>" alt="">  
                          <div class="single-latest-text">
                              <h3><?php echo $duyuru->duyuruBaslik ?></h3> 
                              <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-calendar-check"></i>
                                    <?php echo $tarih[2]." ".$aylar[$tarih[1]]." ".$tarih[0] ?>
                                 </span>
                                 <span><i class="zmdi zmdi-eye"></i>59</span>
                              </div>
                              <p><?php echo $duyuru->duyuruIcerik ?></p>
                              
                              <div class="tags-and-links">
                                  <div class="related-tag">
                                      <span>Başlıklar:</span>
                                      <ul class="tags">  
                                        <?php $tags = explode("-", url_title($duyuru->duyuruBaslik)); 
                                          foreach ( $tags as $tag) { ?>
                                            <li><a href="#"><?php echo $tag ?></a></li>                            
                                        <?php } ?>
                                      </ul>
                                  </div>
                                  <div class="social-links">
                                      <span>Paylaş:</span>
                                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>" target="_blank">
                                        <i class="zmdi zmdi-facebook"></i>
                                      </a>

                                      <a href="https://twitter.com/share" target="_blank" data-url="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>"  data-lang="tr">
                                        <i class="zmdi zmdi-twitter"></i>
                                      </a>
                                      <a href="https://plus.google.com/share?url={<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>}" 
                                      onclick="javascript:window.open(this.href,
                                      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                                      return false;">
                                        <img src="https://www.gstatic.com/images/icons/gplus-64.png" alt="Share on Google+"/>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>    
              </div>
              <div class="col-lg-3 col-md-4">
                  <div class="sidebar-widget">
                      <div class="single-sidebar-widget">
                          <h4 class="title">Son Duyurular</h4>
                          <div class="recent-content">
                          <?php foreach ($duyurular as $duyuru) { ?>
                          
                              <div class="recent-content-item">
                                  <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>">
                                    <img src="<?php echo base_url("public/admin/uploads/$duyuru->duyuruResim") ?>" alt="<?php echo url_title($duyuru->duyuruBaslik) ?>" class="detail_lastest_img">
                                  </a>
                                  <div class="recent-text">
                                      <h4>
                                        <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>">
                                          <?php echo $duyuru->duyuruBaslik ?>
                                        </a>
                                      </h4>
                                      <div class="single-item-comment-view">
                                          <span><i class="zmdi zmdi-eye"></i>59</span>
                                      </div>
                                      <p><?php echo $duyuru->duyuruIcerik ?></p>
                                  </div>
                              </div>

                          <?php } ?>
                          </div>
                      </div>
                      <div class="single-sidebar-widget">
                          <h4 class="title">Duyuru Başlıkları</h4>
                          <ul class="tags">
                          <?php $tags = explode("-", url_title($duyuru->duyuruBaslik)); 
                            foreach ( $tags as $tag) { ?>
                              <li><a href="#"><?php echo $tag ?></a></li>                            
                          <?php } ?>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End of News Details Area-->
