<!DOCTYPE html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha -  Admin Panel HTML Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,dashboard,panel,bootstrap admin template,bootstrap dashboard,dashboard,themeforest admin dashboard,themeforest admin,themeforest dashboard,themeforest admin panel,themeforest admin template,themeforest admin dashboard,cool admin,it dashboard,admin design,dash templates,saas dashboard,dmin ui design">

		<!-- Favicon -->
		<link rel="icon" href="../../assets/img/brand/favicon.ico" type="image/x-icon"/>

		<!-- Title -->
		<title>@yield("title")</title>

		<!-- Bootstrap css-->
		<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="../../assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="../../assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
		<link href="../../assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>

		<!-- Internal DataTables css-->
        <link href="../../assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
        <link href="../../assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
        <link href="../../assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css" rel="stylesheet" />
		
		@if (auth()->user()->lang == 'ar')
			
			<!-- Style css-->
			<link href="../../assets/css-rtl/style.css" rel="stylesheet">
			<link href="../../assets/css-rtl/skins.css" rel="stylesheet">
			<link href="../../assets/css-rtl/dark-style.css" rel="stylesheet">
			
			<link href="../../assets/css-rtl/colors/default.css" rel="stylesheet">
			<!-- Sidemenu css-->
			<link href="../../assets/css-rtl/sidemenu/sidemenu.css" rel="stylesheet">

			<!-- Color css-->
			<link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/css-rtl/colors/color.css">
			
		@else
			<!-- Style css-->
			<link href="../../assets/css/style.css" rel="stylesheet">
			<link href="../../assets/css/skins.css" rel="stylesheet">
			<link href="../../assets/css/dark-style.css" rel="stylesheet">
			<link href="../../assets/css/colors/default.css" rel="stylesheet">
			<!-- Color css-->
			<link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/css/colors/color.css">
			<!-- Sidemenu css-->
			<link href="../../assets/css/sidemenu/sidemenu.css" rel="stylesheet">
		@endif
		<!-- Select2 css-->
		<link href="../../assets/plugins/select2/css/select2.min.css" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="../../assets/plugins/multipleselect/multiple-select.css">

		


    </head>
    <body class="main-body leftmenu">
        <!-- Loader -->
		<div id="global-loader">
			<img src="../../assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->
        <div class="page">

            @include('layouts.navigation')
            @include('layouts.mobileNavigation')
            @include('layouts.sideMenu')


            <!-- Page Content -->
            <main class="main-content side-content pt-0">
				{{ $slot }}
            </main>
            @include('layouts.footer')
            @include('layouts.sideBare')


        </div>

        <!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="../../assets/plugins/jquery/jquery.min.js"></script>

		<!-- Bootstrap js-->
		<script src="../../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="../../assets/plugins/chart.js/Chart.bundle.min.js"></script>

		<!-- Peity js-->
		<script src="../../assets/plugins/peity/jquery.peity.min.js"></script>

		<!-- Select2 js-->
		<script src="../../assets/plugins/select2/js/select2.min.js"></script>

		<!-- Perfect-scrollbar js -->
		<script src="../../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

		<!-- Sidemenu js -->
		<script src="../../assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- Sidebar js -->
		<script src="../../assets/plugins/sidebar/sidebar.js"></script>

		<!-- Internal Morris js -->
		<script src="../../assets/plugins/raphael/raphael.min.js"></script>
		<script src="../../assets/plugins/morris.js/morris.min.js"></script>

		<!-- Circle Progress js-->
		<script src="../../assets/js/circle-progress.min.js"></script>
		<script src="../../assets/js/chart-circle.js"></script>

		<!-- Internal Dashboard js-->
		<script src="../../assets/js/index.js"></script>

		<!-- Sticky js -->
		<script src="../../assets/js/sticky.js"></script>

		<!-- Custom js -->
		<script src="../../assets/js/custom.js"></script>
		<script src="../../assets/plugins/datatable/jquery.dataTables.min.js"></script>
        <script src="../../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
        <script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/dataTables.buttons.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/jszip.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/pdfmake.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/vfs_fonts.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/buttons.html5.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/buttons.print.min.js"></script>
        <script src="../../assets/plugins/datatable/fileexport/buttons.colVis.min.js"></script>
        <script src="../../assets/js/table-data.js"></script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
			const toggleButton = document.getElementById('theme-toggle');
			const currentTheme = localStorage.getItem('theme') || 'light';
			if(currentTheme == 'dark')
				toggleButton.checked = true;

			// Set the initial theme based on localStorage
			document.body.classList.toggle('dark-theme', currentTheme === 'dark');

			toggleButton.addEventListener('click', () => {
				const newTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
				document.body.classList.toggle('dark-theme', newTheme === 'dark');
				localStorage.setItem('theme', newTheme);
        	});
    	});
		</script>
    </body>
</html>
