    </section>
</div>


<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="<?php echo base_url();  ?>public/admin/js/pages/tables/jquery-datatable.js"></script>

</body>

<script type="text/javascript">
	
	function silOnayi(url,tip){
	   swal({
	      title: "Silmek istediğinizden emin misiniz?",
	      text: tip+" nesnesini silirseniz bi daha göremeyeceksiniz",
	      type: "error",
	      showCancelButton: true,
	      confirmButtonColor: "#DD6B55",
	      confirmButtonText: "Evet, Sil!",
	      closeOnConfirm: false,
	      cancelButtonText:"İptal"
	    },
	    function(){
	        swal("Silindi!", tip + " silinmiştir.", "success");
	        setTimeout(function() {
	            window.location = url;
	        }, 2000);
	    });
	}



</script>
</html>