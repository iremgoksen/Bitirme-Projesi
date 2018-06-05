 <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center"><?php echo $blog->blogBaslik ?></h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                              <li>bloglar</li>
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
    $tarih = explode("-",explode(" ", $blog->tarih)[0]);
    $tarih[1] = ($tarih[1] < 10 ? substr($tarih[1],1,2) : $tarih[1]);
  ?>
  <!--News Details Area Start-->
  <div class="news-details-area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-9 col-md-8">
                  <div class="news-details-content">
                     <div class="single-latest-item">
                          <a href="<?php echo base_url("public/admin/uploads/$blog->blogResim") ?>" rel="galeri">
                            <img src="<?php echo base_url("public/admin/uploads/$blog->blogResim") ?>" alt="<?php echo $blog->blogBaslik ?>" style="margin:0 auto;display: block">  
                          </a>
                          <div class="single-latest-text">
                              <h3><?php echo $blog->blogBaslik ?></h3> 
                              <div class="single-item-comment-view">
                                 <span><i class="zmdi zmdi-calendar-check"></i>
                                    <?php echo $tarih[2]." ".$aylar[$tarih[1]]." ".$tarih[0] ?>
                                 </span>
                              </div>
                              <p><?php echo $blog->blogIcerik ?></p>
                              
                              <div class="tags-and-links">
                                  <div class="related-tag">
                                      <span>Başlıklar:</span>
                                      <ul class="tags">  
                                        <?php $tags = explode("-", url_title($blog->blogBaslik)); 
                                          foreach ( $tags as $tag) { ?>
                                            <li><a href="#"><?php echo $tag ?></a></li>                            
                                        <?php } ?>
                                      </ul>
                                  </div>
                                  <div class="social-links">
                                      <span>Paylaş:</span>
                                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>" target="_blank">
                                        <i class="zmdi zmdi-facebook"></i>
                                      </a>

                                      <a href="https://twitter.com/share" target="_blank" data-url="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>"  data-lang="tr">
                                        <i class="zmdi zmdi-twitter"></i>
                                      </a>
                                      <a href="https://plus.google.com/share?url={<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>" 
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
                          <h4 class="title">Son bloglar</h4>
                          <div class="recent-content">
                          <?php foreach ($bloglar as $index =>$blog) { ?>
                              <div class="recent-content-item">
                                  <a href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>">
                                    <img src="<?php echo base_url("public/admin/uploads/$blog->blogResim") ?>" alt="<?php echo url_title($blog->blogBaslik) ?>" class="detail_lastest_img">
                                  </a>
                                  <div class="recent-text">
                                      <h4><a href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>"><?php echo $blog->blogBaslik ?></a></h4>
                                      <div class="single-item-comment-view">
                                      </div>
                                      <p></p>
                                  </div>
                              </div>
                          <?php } ?>
                          </div>
                      </div>
                      <div class="single-sidebar-widget">
                          <h4 class="title">Blog Başlıkları</h4>
                          <ul class="tags">
                          <?php $tags = explode("-", url_title($blog->blogBaslik)); 
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


