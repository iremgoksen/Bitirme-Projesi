<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->


<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="<?php echo base_url() ?>panel">Stu2Dept - Yönetim Paneli</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo base_url() ?>" target="_blank"><i class="material-icons">open_in_new</i>Siteye Git</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="<?php echo base_url("/panel/giris_yonetim/cikis") ?>"><i class="material-icons">input</i>Çıkış</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->

<section>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-img-background">
       <img src="<?php echo base_url("public/admin/images/user-img-background.png") ?>">
       
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">Menü</li>
            <li>
                <a href="<?php echo base_url("panel"); ?>">
                    <i class="material-icons">home</i>
                    <span>Anasayfa</span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url("panel/site_ayarlar"); ?>">
                    <i class="material-icons">settings</i>
                    <span>Site Yönetimi</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">person</i>
                    <span>Yönetici Ayarları</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/yonetim_ayarlar/yeni_yonetici"); ?>">
                            <i class="material-icons">person_add</i>
                            <span class="sub-menu">Yönetici Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/yonetim_ayarlar/"); ?>">
                            <i class="material-icons">format_list_bulleted</i>
                            <span class="sub-menu">Yönetici Listesi</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">content_copy</i>
                    <span>Slider</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/slider_yonetim/yeni_slider"); ?>">Yeni Resim Ekle</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/slider_yonetim"); ?>">Resimleri listele</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">content_copy</i>
                    <span>Sayfa Yönetimi</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/sayfa_yonetim/yeni_sayfa"); ?>">
                            <span>Sayfa Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/sayfa_yonetim/"); ?>">
                            <span>Sayfa Listele</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">chat_bubble</i>
                    <span>Mesajlar</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/mesaj_yonetim"); ?>">Gelen Mesajlar</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">notifications</i>
                    <span>Duyurular</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/duyuru_yonetim/yeni_duyuru"); ?>">Yeni Duyuru Ekle</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/duyuru_yonetim"); ?>">Duyuruları listele</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">people</i>
                    <span>Hocalar</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/hoca_yonetim/yeni_hoca"); ?>">Yeni Hoca Ekle</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/hoca_yonetim"); ?>">Hocaları listele</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">local_offer</i>
                    <span>İstatistikler</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/istatistik_yonetim/yeni_istatistik"); ?>">İstatistik Ekle</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/istatistik_yonetim"); ?>">İstatistikleri Listele</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">rate_review</i>
                    <span>Bloglar</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/blog_yonetim/yeni_blog") ?>">
                            <span>Blog Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/blog_yonetim") ?>">
                            <span>Blog Listele</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">timeline</i>
                    <span>İstatistikler</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="<?php echo base_url("panel/istatistik_yonetim/yeni_istatistik") ?>">
                            <span>İstatistik Ekle</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url("panel/istatistik_yonetim/") ?>">
                            <span>İstatistik Listele</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2018
        </div>
    </div>
    <!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->

</section>

<section class="content">
    <div class="container-fluid">
        
