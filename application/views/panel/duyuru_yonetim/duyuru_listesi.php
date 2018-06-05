<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">notifications</i> Duyurular</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Duyuru Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Duyuru Başlık</th>
                            <th>Duyuru Anasayfada Gösterilsin mi?</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Duyuru Başlık</th>
                            <th>Duyuru Anasayfada Gösterilsin mi?</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $durumlar = array('0' =>"Hayır" ,'1'=>"Evet" );
                    
                    foreach ($duyurular as $duyuru) { ?>
                                           
                        <tr>
                            <td><?php echo $duyuru->duyuruId ?></td>
                            <td><?php echo $duyuru->duyuruBaslik ?></td>
                            <td>
                            <label class="label <?php echo ($duyuru->duyuruDurum == 0 ? 'label bg-red':'label bg-green') ?> ">
                                <?php echo $durumlar[$duyuru->duyuruDurum] ?>
                            </label>
                            </td>
                            <td><?php echo $duyuru->tarih ?></td>
                            <td>
                                <a href="javascript:void(0)"
                                 onclick='silOnayi("<?php echo base_url().'panel/duyuru_yonetim/duyuru_sil/'.$duyuru->duyuruId ?>","<?php echo $duyuru->duyuruBaslik ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/duyuru_yonetim/duyuru_duzenle/<?php echo $duyuru->duyuruId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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
