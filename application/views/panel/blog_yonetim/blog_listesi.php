<div class="block-header">
    <ol class="breadcrumb breadcrumb-col-cyan">
        <li><a href="<?php echo base_url(); ?>panel/"><i class="material-icons">home</i> Ana Sayfa</a></li>
        <li class="active"><i class="material-icons">rate_review</i> Bloglar</a></li>
    </ol>
</div>
<!-- Basic Examples -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Blog Listesi
                </h2>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                    <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Başlık</th>
                            <th>Blog Durumu</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tfoot>
                       <tr>
                            <th>Sıra</th>
                            <th>Başlık</th>
                            <th>Blog Durumu</th>
                            <th>Düzenlenme Tarihi</th>
                            <th>İşlemler</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php $durumlar = array('0' =>"Pasif" ,'1'=>"Aktif" );
                    
                    foreach ($bloglar as $blog) { ?>
                                           
                        <tr>
                            <td><?php echo $blog->blogId ?></td>
                            <td><?php echo $blog->blogBaslik ?></td>
                            <td>
                            <label class="label <?php echo ($blog->blogDurum == 0 ? 'label bg-red':'label bg-green') ?> ">
                                <?php echo $durumlar[$blog->blogDurum] ?>
                            </label>
                            </td>
                            <td><?php echo $blog->tarih ?></td>
                            <td>
                                <a href="javascript:void(0)" 
                                onclick='silOnayi("<?php echo base_url().'panel/blog_yonetim/blog_sil/'.$blog->blogId ?>","<?php echo $blog->blogBaslik ?>")' class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                    <i class="material-icons">delete</i>
                                </a>
                                <a href="<?php echo base_url(); ?>panel/blog_yonetim/blog_duzenle/<?php echo $blog->blogId ?>" class="btn btn-info btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
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