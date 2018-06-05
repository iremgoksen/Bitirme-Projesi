<div class="quiz_form">
    <div class="container">
      <div class="row">
            <div class="col-md-12">
                <div class="text-center text-uppercase">
                    <h2>Sonuçlar</h2>
                </div>
                <!-- //.text-center -->
                
                <div class="column-chart">
                    <div class="legend legend-left hidden-xs">
                        <h3 class="legend-title"><?php echo $this->session->userdata("kullanici")->ad; ?></h3>
                    </div>
                    <!-- //.legend -->
                
                    <div class="legend legend-right hidden-xs">
                        <div class="item">
                            <h4>Süper</h4>
                        </div>
                        <!-- //.item -->
                
                        <div class="item">
                            <h4>Çok İyi</h4>
                        </div>
                        <!-- //.item -->
                
                        <div class="item">
                            <h4>İyi</h4>
                        </div>
                        <!-- //.item -->
                
                        <div class="item">
                            <h4>Kötü</h4>
                        </div>
                        <!-- //.item -->
                    </div>
                    <!-- //.legend -->
                
                    <div class="chart clearfix">
                        <div class="item">
                            <div class="bar">
                                <span class="muhendislikSonuc percent">92%</span>
                
                                <div class="muhendislikSonuc item-progress" data-percent="92">
                                    <span class="title">Mühendislik</span>
                                </div>
                                <!-- //.item-progress -->
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->
                
                        <div class="item">
                            <div class="bar">
                                <span class="bilgisayarSonuc percent">71%</span>
                
                                <div class="bilgisayarSonuc item-progress" data-percent="71">
                                    <span class="title">Bilgisayar</span>
                                </div>
                                <!-- //.item-progress -->
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->
                
                        <div class="item">
                            <div class="bar">
                                <span class="percent elektronikSonuc">82%</span>
                
                                <div class="item-progress elektronikSonuc" data-percent="82">
                                    <span class="title">Elektronik</span>
                                </div>
                                <!-- //.item-progress -->
                            </div>
                            <!-- //.bar -->
                        </div>
                        <!-- //.item -->
						
                        <!-- //.item -->
                    </div>
                    <!-- //.chart -->
					
                </div>
				<div class="subscribe-form">
					<button class="sonuc_temizle">Sonuçları Sil</button>
				</div>
                <!-- //.column-chart -->
            </div>
            <!-- //.col-md-6 -->
        </div>
        <!-- //.row -->
    </div>
    <!-- //.container -->
</div>