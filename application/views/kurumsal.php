<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

 <!--Breadcrumb Banner Area Start-->
<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center"><?php echo $sayfa->sayfaBaslik ?></h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                            <li><?php echo $sayfa->sayfaBaslik ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Breadcrumb Banner Area-->
<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><?php echo $sayfa->sayfaBaslik ?></h3>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="about-text-container">
                    <p><?php echo $sayfa->sayfaIcerik ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->