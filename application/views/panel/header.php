<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#FF9800">
	<title>Yönetim Paneli</title>
    <base href="<?php echo base_url(); ?>">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    
    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Preloader Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/material-design-preloader/md-preloader.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url(); ?>public/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>public/admin/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>public/admin/css/themes/theme-green.css" rel="stylesheet" />

   <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
   
   <!-- Bootstrap Tagsinput Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />


    <!-- Bootstrap File Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/bootstrap-fileinput/css/fileinput.css" rel="stylesheet">


    <!-- Sweet Alert Css -->
    <link href="<?php echo base_url(); ?>public/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet">


     <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap/js/bootstrap.js" ></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script> 

    <script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script> 


    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script> 

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/node-waves/waves.js" ></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/jquery-countto/jquery.countTo.js" ></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/raphael/raphael.min.js" ></script>
    <script src="<?php echo base_url(); ?>public/admin/plugins/morrisjs/morris.js" ></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/chartjs/Chart.bundle.js" ></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>public/admin/js/admin.js" ></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();  ?>public/admin/js/demo.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-fileinput/js/fileinput.js" ></script>

    <!-- Bootstrap Sweet Alert Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/sweetalert/sweetalert.min.js" ></script>

    <!-- Bootstrap Notify Js -->
    <script src="<?php echo base_url(); ?>public/admin/plugins/bootstrap-notify/bootstrap-notify.js" ></script>
    
</head>
<body class="theme-green">
 <!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="md-preloader pl-size-md">
            <svg viewbox="0 0 75 75">
                <circle cx="37.5" cy="37.5" r="33.5" class="pl-red" stroke-width="4" />
            </svg>
        </div>
        <p>Lütfen Bekleyiniz...</p>
    </div>
</div>


