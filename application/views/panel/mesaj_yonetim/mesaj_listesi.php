<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">chat_bubble</i> Mesajlar</a></li>
    </ol>
</div>
<!-- Mail Listesi -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Mesaj Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Ad</th>
                            <th>Konu</th>
                            <th>Tel No</th>
                            <th>Mail</th>
                            <th>Gönerilme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Ad</th>
                            <th>Konu</th>
                            <th>Tel No</th>
                            <th>Mail</th>
                            <th>Gönerilme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $durumlar = array('0' =>"mail" ,'1'=>"drafts" );
                    
                    foreach ($mesajlar as $mesaj) { ?>
                                           
                        <tr>
                            <td><?php echo $mesaj->mesajId ?></td>
                            <td><?php echo $mesaj->ad ?></td>
                            <td><?php echo $mesaj->konu ?></td>
                            <td><?php echo $mesaj->telNo ?></td>
                            <td><?php echo $mesaj->mail ?></td>
                            <td><?php echo $mesaj->tarih ?></td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-danger btn-circle waves-effect waves-circle waves-float" onclick='silOnayi("<?php echo base_url().'panel/mesaj_yonetim/mesaj_sil/'.$mesaj->mesajId ?>","<?php echo $mesaj->konu ?>")'><i class="material-icons">delete</i></a>
                                
                                <button type="button" class="btn btn-warning btn-circle waves-effect waves-circle waves-float" onclick="mesajOku(<?php echo $mesaj->mesajId ?>,this)"><i class="material-icons"><?php echo $durumlar[$mesaj->durum] ?></i></button>
                            </td>
                        </tr>
                    <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #Mail Listesi# -->
<div class="modal fade" id="mesajIcerik" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="konu"></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

function mesajOku(id,target){
    $(target).find("i").html("drafts");
    $.ajax({
        url: '<?php echo base_url() ?>panel/mesaj_yonetim/mesaj_listele/'+id,
        type: 'POST',
        dataType: 'json',
    })
    .done(function(mesaj) {
        $("#konu").html(mesaj.konu);
        $(".modal-body").html(mesaj.mesaj);
        $('#mesajIcerik').modal('show'); 
    })
    .fail(function(err) {
        console.log(err);
    })
    
}

<?php if($this->session->flashdata("mesaj")!=NULL){?>
    $.notify("<?php echo $this->session->flashdata('mesaj')['icerik']; ?>", {
        type: '<?php echo $this->session->flashdata('mesaj')['tip']; ?>',
        animate: {
            enter: 'animated zoomInRight',
            exit: 'animated zoomOutRight'
        }
    });
<?php } ?>

</script>