<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">people</i> Hocaler</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Hoca Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Hoca Ad Soyad</th>
                            <th>Hoca Hakkında</th>
                            <th>Hoca Resmi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Hoca Ad Soyad</th>
                            <th>Hoca Hakkında</th>
                            <th>Hoca Resmi</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    
                    <?php foreach ($hocalar as $hoca) { ?>
                                           
                        <tr>
                            <td><?php echo $hoca->hocaId ?></td>
                            <td><?php echo $hoca->hocaAd ?></td>
                            <td><?php echo $hoca->hocaIcerik ?></td>
                            <td><img src="<?php echo base_url()."public/admin/uploads/".$hoca->hocaResim ?>" style="width:50px;height:50px"/></td>

                            <td>
                                <a href="javascript:void(0)" 
                                onclick='silOnayi("<?php echo base_url().'panel/hoca_yonetim/hoca_sil/'.$hoca->hocaId ?>","<?php echo $hoca->hocaAd ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/hoca_yonetim/hoca_duzenle/<?php echo $hoca->hocaId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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