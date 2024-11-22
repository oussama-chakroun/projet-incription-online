<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="../../assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>Spruha - Bootstrap Premium HTML Dashboard Template</title>

		<!-- Bootstrap css-->
		<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="../../assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="../../assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="../../assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Style css-->
		<link href="../../assets/css/style.css" rel="stylesheet">
		<link href="../../assets/css/skins.css" rel="stylesheet">
		<link href="../../assets/css/dark-style.css" rel="stylesheet">
		<link href="../../assets/css/colors/default.css" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/css/colors/color.css">
    </head>
    <body class="main-body leftmenu">
        <!-- Loader -->
		<div id="global-loader">
			<img src="../../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->
        <!-- Page -->
		<div class="page main-signin-wrapper">
            {{ $slot }}
        </div>

        
		<!-- Jquery js-->
		<script src="../../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Select2 js-->
		<script src="../../assets/plugins/select2/js/select2.min.js"></script>

		<!-- Custom js -->
		<script src="../../assets/js/custom.js"></script>
		<!-- Internal Parsley js-->
		<script src="../../assets/plugins/parsleyjs/parsley.min.js"></script>

		<!-- Internal Form-validation js-->
		<script src="../../assets/js/form-validation.js"></script>
    </body>
</html>
