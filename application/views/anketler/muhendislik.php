<div class="quiz_form"> 
        <?php 
            $soruSirasi = 0;
            $tumSoruSayisi = count($sorular);

            for ($i=3; $i > 0 ; $i--) { 
             $soruSayisi[$i] = intval($tumSoruSayisi / $i);
             $tumSoruSayisi = $tumSoruSayisi - $soruSayisi[$i]; 
            } 
         ?>
        
                <div class="container sayfaBasi">
                  <div class="row">
                    <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="card">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bölüm1</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bölüm2</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Bölüm3</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                          
                          <?php for ($i=0; $i < $soruSayisi[1]  ; $i++) { ?> 
                              
                              <div class="question">
                                <h3><?php echo $soruSirasi + 1 ."-" .$sorular[$i]->soruMetni ?></h3>
                                <?php $soruIdler[$soruSirasi] = $sorular[$soruSirasi]->soruID ?>
                                <?php foreach ($cevaplar as $index => $cevap) { 
                                    if($cevap->olcekAd == "Her Zaman"){
                                        $olcekDeger = 5;
                                     }else if($cevap->olcekAd == "Sıklıkla"){
                                        $olcekDeger = 4;
                                     }else if($cevap->olcekAd == "Bazen"){
                                        $olcekDeger = 3;
                                     }else if($cevap->olcekAd == "Nadiren"){
                                        $olcekDeger = 2;
                                     }else if($cevap->olcekAd == "Hiçbir Zaman"){
                                        $olcekDeger = 1;
                                     }
                                  ?>
                                    <div>
                                        <input type="radio" name="question-<?php echo $sorular[$i]->soruID?>" class="soru" value="<?php echo $olcekDeger ?> " <?php echo ($olcekDeger==5)?'checked':'' ?>>
                                        <label for="question-<?php echo $sorular[$i]->soruID?>">
                                           <?php echo $cevap->olcekAd?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>

                          <?php $soruSirasi++; } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                           <?php for ($i=0; $i < $soruSayisi[2]  ; $i++) { ?> 
                              
                              <div class="question">
                                <h3><?php echo $soruSirasi + 1 ."-" .$sorular[$soruSirasi]->soruMetni ?></h3>
                                <?php $soruIdler[$soruSirasi] = $sorular[$soruSirasi]->soruID ?>
                                <?php foreach ($cevaplar as $index => $cevap) { 
                                    if($cevap->olcekAd == "Her Zaman"){
                                        $olcekDeger = 5;
                                     }else if($cevap->olcekAd == "Sıklıkla"){
                                        $olcekDeger = 4;
                                     }else if($cevap->olcekAd == "Bazen"){
                                        $olcekDeger = 3;
                                     }else if($cevap->olcekAd == "Nadiren"){
                                        $olcekDeger = 2;
                                     }else if($cevap->olcekAd == "Hiçbir Zaman"){
                                        $olcekDeger = 1;
                                     }
                                  ?>
                                    <div>
                                        <input type="radio" name="question-<?php echo $sorular[$soruSirasi]->soruID?>" class="soru" value="<?php echo $olcekDeger ?> " <?php echo ($olcekDeger==5)?'checked':'' ?>>
                                        <label for="question-<?php echo $sorular[$soruSirasi]->soruID?>">
                                           <?php echo $cevap->olcekAd?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>

                          <?php $soruSirasi++; } ?>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                           <?php for ($i=0; $i < $soruSayisi[3]  ; $i++) { ?> 
                              
                              <div class="question">
                                <h3><?php echo $soruSirasi + 1 ."-" .$sorular[$soruSirasi]->soruMetni ?></h3>
                                <?php $soruIdler[$soruSirasi] = $sorular[$soruSirasi]->soruID ?>
                                <?php foreach ($cevaplar as $index => $cevap) { 
                                    if($cevap->olcekAd == "Her Zaman"){
                                        $olcekDeger = 5;
                                     }else if($cevap->olcekAd == "Sıklıkla"){
                                        $olcekDeger = 4;
                                     }else if($cevap->olcekAd == "Bazen"){
                                        $olcekDeger = 3;
                                     }else if($cevap->olcekAd == "Nadiren"){
                                        $olcekDeger = 2;
                                     }else if($cevap->olcekAd == "Hiçbir Zaman"){
                                        $olcekDeger = 1;
                                     }
                                  ?>
                                    <div>
                                        <input type="radio" name="question-<?php echo $sorular[$soruSirasi]->soruID?>" class="soru" value="<?php echo $olcekDeger ?> " <?php echo ($olcekDeger==5)?'checked':'' ?>>
                                        <label for="question-<?php echo $sorular[$soruSirasi]->soruID?>">
                                           <?php echo $cevap->olcekAd?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>

                          <?php $soruSirasi++;} ?>
                          <button class="button-default devamUygunluk" value="0" tip="0">
                            Anketi Tamamla
                          </button>
                        </div>
                    </div>

                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bölüm1</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bölüm2</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Bölüm3</a></li>
                    </ul>
                    
                  </div>
                </div>
              </div>
            </div>
           

       <?php 
            $this->session->set_userdata("muhendislik",json_encode($soruIdler));
       
        ?>
      

</div>