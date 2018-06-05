<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">local_offer</i> istatistikler</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    İstatistik Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>İstatistik Ad</th>
                            <th>İstatistik Değer</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>İstatistik Ad</th>
                            <th>İstatistik Değer</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    foreach ($istatistikler as $istatistik) { ?>
                                           
                        <tr>
                            <td><?php echo $istatistik->istatistikId ?></td>
                            <td><?php echo $istatistik->istatistikAd ?></td>
                            <td><?php echo $istatistik->istatistikDeger ?></td>
                            <td>
                                <a href="javascript:void(0)" 
                                 onclick='silOnayi("<?php echo base_url("panel/istatistik_yonetim/istatistik_sil/$istatistik->istatistikId") ?>","<?php echo $istatistik->istatistikKonum ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete</i></a>
                                <a href="<?php echo base_url(); ?>panel/istatistik_yonetim/istatistik_duzenle/<?php echo $istatistik->istatistikId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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
        $.notify("<?php echo $this->session->flashdata('mesaj')['icerik'] ?>", {
            type:'<?php echo $this->session->flashdata('mesaj')['tip']; ?>',
            animate: {
                enter: 'animated zoomInRight',
                exit: 'animated zoomOutRight'
            }
        });
        <?php } ?>
</script>