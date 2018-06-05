<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">people</i> Yöneticiler</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Yönetici Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Ad Soyad</th>
                            <th>Kullanıcı Adı</th>
                            <th>Email</th>
                            <th>Rütbe</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlemler</th>

                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Ad Soyad</th>
                            <th>Kullanıcı Adı</th>
                            <th>Email</th>
                            <th>Rütbe</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $roles = array('1' =>"Yönetici" ,'2'=>"Editör" );
                    foreach ($yoneticiler as $yonetici) { ?>
                                           
                        <tr>
                            <td><?php echo $yonetici->kullaniciId ?></td>
                            <td><?php echo $yonetici->ad . " " .$yonetici->soyad ?></td>
                            <td><?php echo $yonetici->kullaniciAdi ?></td>
                            <td><?php echo $yonetici->mail ?></td>
                            <td><?php echo $roles[$yonetici->rutbe] ?></td>
                            <td><?php echo $yonetici->tarih ?></td>
                            <td>
                                <a href="javascript:void(0)"
                                    onclick='silOnayi("<?php echo base_url().'panel/yonetim_ayarlar/yonetici_sil/'.$yonetici->id ?>","<?php echo $yonetici->kullaniciAdi ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/yonetim_ayarlar/yonetici_duzenle/<?php echo $yonetici->id ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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