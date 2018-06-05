$(document).ready(function () {
	elektronikSonuc = parseFloat(localStorage.elektronikSim*100).toFixed(2);
    bilgisayarSonuc = parseFloat(localStorage.bilgisayarSim*100).toFixed(2);
    muhendislikSonuc = parseFloat(localStorage.muhendislikSim*100).toFixed(2);

    $("span.elektronikSonuc").html(elektronikSonuc);
    $("div.elektronikSonuc").attr("data-percent",elektronikSonuc);

    $("span.bilgisayarSonuc").html(bilgisayarSonuc);
    $("div.bilgisayarSonuc").attr("data-percent",bilgisayarSonuc);

    $("span.muhendislikSonuc").html(muhendislikSonuc);
    $("div.muhendislikSonuc").attr("data-percent",muhendislikSonuc);
   
	columnChart();
    
    function columnChart(){
        var item = $('.chart', '.column-chart').find('.item'),
        itemWidth = 100 / item.length;
        item.css('width', itemWidth + '%');
        
        $('.column-chart').find('.item-progress').each(function(){
            var itemProgress = $(this),
            itemProgressHeight = $(this).parent().height() * ($(this).data('percent') / 100);
            itemProgress.css('height', itemProgressHeight);
        });
    };

   if($(".bilgisayar-elektronik").length!=0){
    if(parseFloat(localStorage.muhendislikSim) < 0.5 || localStorage.muhendislikSim == undefined){
      $(".bilgisayar-elektronik").hide();
    }else{
      $(".bilgisayar-elektronik").show();
    }
   }
	
   if(localStorage.muhendislikSim == undefined){
        $(".muhendislikSonuc").remove();
   }
   
   if(localStorage.bilgisayarSim == undefined){
        $(".bilgisayarSonuc").remove();
   }

   if(localStorage.elektronikSim == undefined){
        $(".elektronikSonuc").remove();
   }
   
   $(".sonuc_temizle").on("click",function(){
	   localStorage.removeItem("bilgisayarSim");
	   localStorage.removeItem("elektronikSim");
	   localStorage.removeItem("muhendislikSim");
	   location.reload();
	})
    
})