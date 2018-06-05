<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">person</i> Galeriler</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Galeri Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Galeri Ad</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Galeri Ad</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    foreach ($galeriler as $galeri) { ?>
                                           
                        <tr>
                            <td><?php echo $galeri->galerId ?></td>
                            <td><?php echo $galeri->galeriAd ?></td>

                            <td>
                                <a href="javascript:void(0)" 
                                onclick='silOnayi("<?php echo base_url().'panel/galeri_yonetim/galeri_sil/'.$galeri->galeriId ?>","<?php echo $galeri->galeriAd ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/galeri_yonetim/galeri_duzenle/<?php echo $galeri->galeriId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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
        $.notify("<?php echo $this->session->flashdata('mesaj') ?>", {
            type: 'success',
            animate: {
                enter: 'animated zoomInRight',
                exit: 'animated zoomOutRight'
            }
        });
        <?php } ?>
</script>