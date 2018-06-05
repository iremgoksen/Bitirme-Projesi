<style type="text/css" media="screen">
a{
    text-decoration: none!important;
    cursor: pointer!important;
}    
</style>


<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li class="active"><i class="material-icons">home</i> Ana Sayfa</a></li>
    </ol>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url("panel/sayfa_yonetim") ?>">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">content_copy</i>
        </div>
        <div class="content">
            <div class="text">Sayfalar</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->sayfaSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->sayfaSayisi ?></div>
        </div>
    </div>
    </a>
</div>	

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url() ?>panel/duyuru_yonetim">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">notifications</i>
        </div>
        <div class="content">
            <div class="text">Duyurular</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->duyuruSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->duyuruSayisi ?></div>
        </div>
    </div>
    </a>
</div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url() ?>panel/hoca_yonetim">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">people</i>
        </div>
        <div class="content">
            <div class="text">Hocalar</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->hocaSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->hocaSayisi ?></div>
        </div>
    </div>
    </a>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url() ?>panel/yonetim_ayarlar">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">people</i>
        </div>
        <div class="content">
            <div class="text">Yöneticiler</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->kullaniciSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->kullaniciSayisi ?></div>
        </div>
    </div>
    </a>
</div>	
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url() ?>panel/istatistik_yonetim">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">local_offer</i>
        </div>
        <div class="content">
            <div class="text">istatistikler</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->istatistikSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->istatistikSayisi ?></div>
        </div>
    </div>
    </a>
</div>	
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <a href="<?php echo base_url() ?>panel/blog_yonetim">
    <div class="info-box hover-zoom-effect">
        <div class="icon bg-green">
            <i class="material-icons">rate_review</i>
        </div>
        <div class="content">
            <div class="text">Bloglar</div>
            <div class="number count-to" data-from="0" data-to="<?php echo $sayfaSayisi->blogSayisi ?>" data-speed="1000" data-fresh-interval="20"><?php echo $sayfaSayisi->blogSayisi ?></div>
        </div>
    </div>
    </a>
</div>	