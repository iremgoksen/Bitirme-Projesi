 <!--Breadcrumb Banner Area Start-->
  <div class="breadcrumb-banner-area">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="breadcrumb-text">
                      <h1 class="text-center">Duyurular</h1>
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
  <!--Latest News Area Start--> 
  <div class="latest-area section-padding latest-page">
      <div class="container">
          <div class="row">
          <?php foreach ($duyurular as $duyuru) { ?> 
              <?php 
                  $aylar=array(' ', 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos','Eylül',  'Ekim',  'Kasım',  'Aralık');
                  $tarih = explode("-",explode(" ", $duyuru->tarih)[0]);
                  $tarih[1] = ($tarih[1] < 10 ? substr($tarih[1],1,2) : $tarih[1]);

                ?>
              <div class="col-md-4 col-sm-6">
                  <div class="single-latest-item">
                      <div class="single-latest-image">
                          <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>"><img src="<?php echo base_url("public/admin/uploads/$duyuru->duyuruResim") ?>" alt=""></a>
                      </div>
                      <div class="single-latest-text">
                          <h3><a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>"><?php echo $duyuru->duyuruBaslik ?></a></h3>
                          <div class="single-item-comment-view">
                             <span><i class="zmdi zmdi-calendar-check"></i><?php echo $tarih[2]." ".$aylar[$tarih[1]]." ".$tarih[0]  ?></span>
                             <span><i class="zmdi zmdi-eye"></i>59</span>
                         </div>
                         <p> <?php echo (strlen($duyuru->duyuruIcerik) > 100 ? substr($duyuru->duyuruIcerik, 0,100)."..." : $duyuru->duyuruIcerik) ?></p>
                         <a href="<?php echo base_url("duyuru/$duyuru->duyuruId/").url_title($duyuru->duyuruBaslik) ?>" class="button-default">Devamını Oku</a>
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
  <!--End of Latest News Area-->