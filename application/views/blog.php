 <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Bloglar</h1>
                      <div class="breadcrumb-bar">
                          <ul class="breadcrumb">
                              <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                              <li>Bloglar</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End of Breadcrumb Banner Area-->

<!--Event Area Start-->
<div class="event-area section-padding event-page">
    <div class="container">
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
                        <a href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>">
                            <img src="<?php echo base_url("public/admin/uploads/$blog->blogResim") ?>" alt="<?php echo url_title($blog->blogBaslik) ?>">
                            <span><span><?php echo $tarih[2] ?></span><?php echo $aylar[$tarih[1]] ?></span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>"><?php echo $blog->blogBaslik ?></a></h3>
                        <div class="single-item-comment-view">
                           <span><i class="zmdi zmdi-time"></i>
                              <?php echo $tarih[2]." ".$aylar[$tarih[1]]." ".$tarih[0] ?>
                            </span> 
                       </div>
                       <p><?php echo (strlen($blog->blogIcerik) > 100 ? substr($blog->blogIcerik, 0,100)."..." : $blog->blogIcerik) ?></p>
                       <a class="button-default" href="<?php echo base_url("blog/$blog->blogId/").url_title($blog->blogBaslik) ?>">Devamını Oku</a>
                    </div>
                </div>
            </div>
          <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pagination-content">
                    <ul class="pagination">
                         <?php foreach ($sayfaLinkleri as $link) {
                           echo "<li>". $link."</li>";
                          } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>  