<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">question_answer</i> Soru&Cevap</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Soru&Cevap Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Soru</th>
                            <th>Cevap</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Soru</th>
                            <th>Cevap</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 

                    foreach ($sorucevaplar as $sorucevap) { ?>
                                           
                        <tr>
                            <td><?php echo $sorucevap->sorucevapId ?></td>
                            <td><?php echo $sorucevap->soru ?></td>
                            <td><?php echo $sorucevap->cevap ?></td>

                            <td>
                                <a href="javascript:void(0)" 
                                 onclick='silOnayi("<?php echo base_url().'panel/sorucevap_yonetim/sorucevap_sil/'.$sorucevap->sorucevapId ?>","<?php echo $sorucevap->soru ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                 <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/sorucevap_yonetim/sorucevap_duzenle/<?php echo $sorucevap->sorucevapId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
                            </td>

                            
                        </tr>
                    <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- #END# Basic Examples -->
<script type="text/javascript">

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