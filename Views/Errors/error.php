<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Error Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="<?=BASE_URL?>assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?=BASE_URL?>assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN error -->
		<div class="error-page">
			<!-- BEGIN error-page-content -->
			<div class="error-page-content">
				<div class="error-img">
					<div class="error-img-code">404</div>
					<img src="<?=BASE_URL?>assets/img/page/404.svg" alt="" />
				</div>
				
				<h1>Oops!</h1> 
				<h3>No se encuentra nada en este directorio!</h3>
				
			</div>
			<!-- END error-page-content -->
		</div>
		<!-- END error -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
		<!-- BEGIN theme-panel -->

	<!-- END theme-panel -->
		
	</div>
	<!-- END #app -->
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="<?=BASE_URL?>assets/js/vendor.min.js"></script>
	<script src="<?=BASE_URL?>assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	
</body>
</html>