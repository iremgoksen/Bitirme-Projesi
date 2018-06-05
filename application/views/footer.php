	 <!--Newsletter Area Start-->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="newsletter-content">
                            <h3>SUBSCRIBE</h3>
                            <h2>TO OUR NEWSLETTER</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="newsletter-form">
                            <form action="#">
                                <div class="subscribe-form">
                                    <input type="email" name="email" placeholder="Enter your email address...">
                                    <button type="submit">SUBSCRIBE</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--End of Newsletter Area-->
	<!--Footer Widget Area Start-->
    <div class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="single-footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="<?php echo base_url("public/images/footer_logo.png") ?>" alt=""></a>
                        </div>
                        <p><?php echo $ayarlar->siteAciklama ?> </p>
                        <div class="social-icons">
                        <?php if(!empty($ayarlar->firmaFacebook)){ ?>
                            <a href="<?php echo $ayarlar->firmaFacebook ?>"><i class="zmdi zmdi-facebook"></i></a>
                        <?php } ?>
                        <?php if(!empty($ayarlar->firmaTwitter)){ ?>
                            <a href="<?php echo $ayarlar->firmaTwitter ?>"><i class="zmdi zmdi-twitter"></i></a>
                        <?php } ?>
                        <?php if(!empty($ayarlar->firmaGplus)){ ?>
                            <a href="<?php echo $ayarlar->firmaGplus ?>"><i class="zmdi zmdi-google-plus"></i></a>
                        <?php } ?>
                        <?php if(!empty($ayarlar->firmaYoutube)){ ?>
                            <a href="<?php echo $ayarlar->firmaYoutube ?>"><i class="zmdi zmdi-youtube"></i></a>
                        <?php } ?>
                        <?php if(!empty($ayarlar->firmaInstagram)){ ?>
                            <a href="<?php echo $ayarlar->firmaInstagram ?>"><i class="zmdi zmdi-instagram"></i></a>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-footer-widget">
                        <h3>Bize Ulaşın</h3>
                        <span><i class="fa fa-phone"></i><a href="tel:<?php echo $ayarlar->firmaMobil ?>"><?php echo $ayarlar->firmaMobil ?></a></span>
                        <span><i class="fa fa-envelope"></i><a href="mail:<?php echo $ayarlar->firmaMail ?>"><?php echo $ayarlar->firmaMail ?></a></span>
                        <span><i class="fa fa-globe"></i><?php echo base_url() ?></span>
                        <span><i class="fa fa-map-marker"></i><?php echo $ayarlar->firmaAdres ?></span>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm">
                    <div class="single-footer-widget">
                        <h3>Hızlı Bağlantılar</h3>
                        <ul class="footer-list">
                            <li><a href="<?php echo base_url() ?>">Anasayfa</a></li>
                            <?php foreach ($sayfalar as $sayfa){ 
	                             if($sayfa->sayfaDurum==1){
	                            ?>
	                            
	                              <li><a href="<?php echo base_url("kurumsal/$sayfa->sayfaId/").url_title($sayfa->sayfaBaslik) ?>"><?php echo $sayfa->sayfaBaslik; ?></a></li>
	                            
	                          <?php } 
	                          } ?> 
                            <li><a href="<?php echo base_url("iletisim") ?>">İletişim</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="single-footer-widget">
                        <h3>Sosyal Medya</h3>
                        <div class="instagram-image">
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/1.jpg" alt=""></a>
                            </div>
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/2.jpg" alt=""></a>
                            </div>
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/3.jpg" alt=""></a>
                            </div>
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/4.jpg" alt=""></a>
                            </div>
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/5.jpg" alt=""></a>
                            </div>
                            <div class="footer-img">
                                <a href="#"><img src="img/footer/6.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End of Footer Widget Area-->
    <!--Footer Area Start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <span><?php echo $ayarlar->firmaCopyright ?></span>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="column-right">
	        			<a target="_blank" href="http://www.ofosoft.com"><img src="https://www.ofosoft.com.tr/design_silme.png" alt="http://www.ofosoft.com"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End of Footer Area-->
    


    <!-- jquery
	============================================ -->		
    <script src="<?php echo base_url("public/js/vendor/jquery-1.12.4.min.js") ?>"></script>
    
	<!-- bootstrap JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/bootstrap.min.js") ?>"></script>
    
    <!-- nivo slider js
	============================================ -->       
	<script src="<?php echo base_url("public/lib/nivo-slider/js/jquery.nivo.slider.js") ?>" type="text/javascript"></script>
	<script src="<?php echo base_url("public/lib/nivo-slider/home.js") ?>" type="text/javascript"></script>
    
	<!-- meanmenu JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/jquery.meanmenu.js") ?>"></script>
	
	<!-- wow JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/wow.min.js") ?>"></script>
    
	<!-- owl.carousel JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/owl.carousel.min.js") ?>"></script>
    
	<!-- scrollUp JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/jquery.scrollUp.min.js") ?>"></script>
    
	<!-- Waypoints JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/waypoints.min.js") ?>"></script>
    
	<!-- Counterup JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/jquery.counterup.min.js") ?>"></script>
    
	<!-- Slick JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/slick.min.js") ?>"></script>
    
	<!-- plugins JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/plugins.js") ?> "></script>
    
	<!-- main JS
	============================================ -->		
    <script src="<?php echo base_url("public/js/main.js")?> "></script>

    <!-- Custom JS
    ============================================ -->
    <script src="<?php echo base_url("public/js/custom.js")?> "></script>
  	


	<script type="text/javascript">	
	jQuery(document).ready(function($) {
        $(".nav-tabs > li").on("click",function (argument) {
            $('html, body').animate({
                scrollTop: $(".sayfaBasi").offset().top
            }, 500);
        });

        $('.modal1').on('click', function () {
            $this = $(this);
            soruSayisi = $this.attr("soruSayisi");
            setTimeout(function(){
                $("#myModal-"+soruSayisi).modal("hide");
                $("#myModal-"+soruSayisi).attr("src","");
                $($this).remove();
            },5000);
        })
        $(".devamUygunluk").on("click",function () {
            oklityenMuhendislikCevap = 0,oklityenGoodMuhendislik = 0,cevaplar = [],oklityenBadMuhendislik = 0,sonuc=[];
            goodMuhendislik = 0,badMuhendislik = 0;

            oklityenBilgisayarCevap = 0,oklityenGoodBilgisayar = 0,oklityenBadBilgisayar = 0;
            goodBilgisayar = 0,badBilgisayar = 0;

            oklityenElektronikCevap = 0,oklityenGoodElektronik = 0,oklityenBadElektronik = 0;
            goodElektronik = 0,badElektronik = 0;

            var goodCarpimY = 0,badCarpimY = 0,muhendislikSimBad = 0,bilgisayarSimBad = 0,elektronikSimBad = 0;

            goodMuhendislik = [ 5, 5, 5, 1, 5, 5, 1, 5, 5, 3, 5, 5, 5, 3, 3 ];  // her zaman=5 
			badMuhendislik = [ 1, 1, 1, 5, 1, 1, 5, 1, 1, 1,1, 1, 1, 1, 1];
            
            goodBilgisayar = [ 5, 3, 5, 3, 5, 5, 1, 5, 3, 3, 5, 1, 5, 1, 3 ];
            badBilgisayar = [  1, 1, 1, 1, 1, 1, 5, 1, 1, 1, 1, 5, 1, 5, 1];
            goodElektronik = [ 2, 2, 3, 2, 3, 1, 2, 2, 1, 5, 2, 5, 2, 3, 3 ];
            badElektronik = [  1, 1, 1, 1, 1, 1, 1, 1, 1, 5, 1, 5, 1, 1, 1 ];
            
            hata = false;

            if ($(this).attr("tip") == 0) {
             
              sorular = '<?php echo $this->session->userdata("muhendislik"); ?>';

            }else if($(this).attr("tip") == 1){

              sorular = '<?php echo $this->session->userdata("bilgisayar"); ?>';

            }else if($(this).attr("tip") == 2){

              sorular = '<?php echo $this->session->userdata("elektronik"); ?>';

            }

            sorular = JSON.parse(sorular);
            for (var i = 0; i < sorular.length; i++) {
                if($("input[name = question"+"-"+sorular[i]+"]:checked").val() != undefined){
                    cevaplar[i] = $("input[name = question"+"-"+sorular[i]+"]:checked").val();
                    if(localStorage.sonuc!=undefined){
                        sonuc = JSON.parse(localStorage.sonuc);
                    }
                    sonuc.push({
                        soruID: sorular[i],
                        anketCevap: cevaplar[i],
                        kullaniciTckNo:"<?php if(isset($this->session->userdata("kullanici")->kullaniciTckNo)) 
                            echo $this->session->userdata("kullanici")->kullaniciTckNo;?>"
                    });
                    
                }else{
                    bosSoru = i+1;
                    hata = true;
                    break;
                }
              
            }


            if(hata){
                if(localStorage.sonuc!=undefined){
                    sonuc = JSON.parse(localStorage.sonuc);
                }else{
                    sonuc = [];
                }
                alert(bosSoru+".soruyu boş geçmeyiniz");

            }else{
                 if ($(this).attr("tip") == 0) {
             
                    for (var i = 0; i < cevaplar.length; i++) {
                       oklityenMuhendislikCevap +=parseInt(cevaplar[i] * cevaplar[i]) ;
                       goodCarpimY +=parseInt(cevaplar[i] * goodMuhendislik[i]); 
                       oklityenGoodMuhendislik +=parseInt(goodMuhendislik[i] * goodMuhendislik[i]) ;

                       badCarpimY +=parseInt(cevaplar[i] * badMuhendislik[i]) ;
                       oklityenBadMuhendislik +=parseInt(badMuhendislik[i] * badMuhendislik[i]) ;
                    }

                    oklityenGoodMuhendislik  = Math.sqrt(oklityenGoodMuhendislik);
                    oklityenMuhendislikCevap  = Math.sqrt(oklityenMuhendislikCevap);
                    muhendislikSimGood = goodCarpimY /  ( oklityenGoodMuhendislik * oklityenMuhendislikCevap );

                    oklityenBadMuhendislik  = Math.sqrt(oklityenBadMuhendislik);
                    muhendislikSimBad = badCarpimY /  ( oklityenBadMuhendislik * oklityenMuhendislikCevap );

                    if(muhendislikSimGood > muhendislikSimBad ){
                        muhendislikSim = muhendislikSimGood;
						
                    }else{
                        muhendislikSim = parseFloat(1-muhendislikSimBad);
                    }
	
					localStorage.setItem("muhendislikSim",muhendislikSim);
                    localStorage.setItem("sonuc",JSON.stringify(sonuc));
                    
                    if(parseFloat(localStorage.muhendislikSim) > 0.5){
                        alert("Anket Başarılı Bilgisayar Ve Elektronik Anketine Geçebilirsiniz");
                        window.location = "<?php echo base_url("anket/") ?>";

                    }else{
                        alert("Anket Sonucunuza Göre Mühendisliğe Uygun Gözükmemektesiniz.");
                        window.location = "<?php echo base_url("anket/muhendislik_sonuc") ?>";
                    
                    }


                }else if($(this).attr("tip") == 1){

                  for (var i = 0; i < cevaplar.length-1; i++) {
                       oklityenBilgisayarCevap += cevaplar[i] * cevaplar[i];
                       goodCarpimY += cevaplar[i] * goodBilgisayar[i];
                       oklityenGoodBilgisayar += goodBilgisayar[i] * goodBilgisayar[i];

                       badCarpimY += parseInt(cevaplar[i]) * badBilgisayar[i];
                       oklityenBadBilgisayar += badBilgisayar[i] * badBilgisayar[i];
                    }

                    oklityenGoodBilgisayar  = Math.sqrt(oklityenGoodBilgisayar);
                    oklityenBilgisayarCevap  = Math.sqrt(oklityenBilgisayarCevap);
                    bilgisayarSimGood = goodCarpimY /  ( oklityenGoodBilgisayar * oklityenBilgisayarCevap );

                    oklityenBadBilgisayar  = Math.sqrt(oklityenBadBilgisayar);
                    bilgisayarSimBad = badCarpimY /  ( oklityenBadBilgisayar * oklityenBilgisayarCevap );

                   if(bilgisayarSimGood > bilgisayarSimBad ){
                        bilgisayarSim = bilgisayarSimGood;
                    }else{

                        bilgisayarSim = parseFloat(1-bilgisayarSimBad);
						
                    }

                    
					localStorage.setItem("bilgisayarSim",bilgisayarSim);
                    localStorage.setItem("sonuc",JSON.stringify(sonuc));
                    alert("Elektronik Anketine Geçebilirsiniz");
                    window.location = "<?php echo base_url("anket/") ?>";


                }else if($(this).attr("tip") == 2){

                  for (var i = 0; i < cevaplar.length; i++) {
                       oklityenElektronikCevap += cevaplar[i] * cevaplar[i];
                       goodCarpimY += cevaplar[i] * goodElektronik[i];
                       oklityenGoodElektronik += goodElektronik[i] * goodElektronik[i];

                       badCarpimY += cevaplar[i] * badElektronik[i];
                       oklityenBadElektronik += badElektronik[i] * badElektronik[i];
                    }

                    oklityenGoodElektronik  = Math.sqrt(oklityenGoodElektronik);
                    oklityenElektronikCevap  = Math.sqrt(oklityenElektronikCevap);
                    elektronikSimGood = goodCarpimY /  ( oklityenGoodElektronik * oklityenElektronikCevap );

                    oklityenBadElektronik  = Math.sqrt(oklityenBadElektronik);
                    elektronikSimBad = badCarpimY /  ( oklityenBadElektronik * oklityenElektronikCevap );
                   

                   if(elektronikSimGood > elektronikSimBad ){
                        elektronikSim = elektronikSimGood;
                    }else{

						elektronikSim = parseFloat(1-elektronikSimBad);
                    }

                    localStorage.setItem("elektronikSim", elektronikSim);
                    window.location = "<?php echo base_url("anket/muhendislik_sonuc") ?>";

                    /*$.post("<?php echo base_url("anket/uygunluk_kaydet") ?>",{sonuc : localStorage.sonuc},function (data) { 

                            //localStorage.removeItem("sonuc");
                            window.location = "<?php echo base_url("anket/muhendislik_sonuc") ?>";
                            alert("Anketiniz sistemimize kaydedilmiştir.Katılım sağladığınız için teşekkürler");
                        
                    })*/

                }

               

            }

        });



	   $("#yorumGonder").click(function(event) {
	      $.post('<?php echo base_url(); ?>yorum/yorum_gonder/', {ad: $("#ad").val(),baslik:$("#konu").val(),yorum:$("#yorum").val()}, function(data, textStatus, xhr) {
	      	var sonuc = JSON.parse(data);
	        $("#sonuc").html(sonuc.icerik + "Yorumunuz için teşekkürler.");
	        $("#sonuc").addClass(sonuc.tipi);
	      	document.getElementById("yorumForm").reset();
	        setTimeout(function() {
	        	$("#sonuc").html("");
	        	window.location.reload();
	      	}, 2000);
	      });
	     
	      return false;
    	});

	  var owl = $("#owl-demo");

	  owl.owlCarousel({
	      items : 3, //10 items above 1000px browser width
	      itemsDesktop : [1000,3], //5 items between 1000px and 901px
	      itemsDesktopSmall : [900,3], // betweem 900px and 601px
	      itemsTablet: [600,2], //2 items between 600 and 0
	      itemsMobile : [479,1], // itemsMobile disabled - inherit from itemsTablet option
	  });
	  
	  $(".next").click(function(){
	    owl.trigger('owl.next');
	  })
	  $(".prev").click(function(){
	    owl.trigger('owl.prev');
	  })


	});
</script>

</body>

</html>