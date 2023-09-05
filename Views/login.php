<!DOCTYPE html>
<html lang="es" class="dark-mode">

<head>
	<meta charset="utf-8" />
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="" />
	<meta name="author" content="" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="<?=BASE_URL?>assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?=BASE_URL?>assets/css/app.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<link rel="stylesheet" href="<?=BASE_URL?>assets/css/style.css">

	<!-- ================== END core-css ================== -->

</head>

<body>
	<div class="loader-container row" id="loader-container">
		<div class="loader"></div>
	</div>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login">

			<!-- BEGIN login-content -->
			<div class="login-content">

				<form method="POST" name="login_form" class="">

					<img class="logo" src="<?=BASE_URL?>assets/img/logoVet.png" alt="">

					<h1 class="text-center">Iniciar Sesión</h1>

					<div class="mb-3">
						<label class="form-label">Correo Electronico:</label>
						<input type="text" class="form-control form-control-lg fs-15px" value="" require />
						<div class="invalid-feedback">Este campo es requerido*</div>
					</div>
					<div class="mb-3">
						<div class="d-flex">
							<label class="form-label">Contraseña:</label>
						</div>
						<input type="password" class="form-control form-control-lg fs-15px" value="" />
						<div class="invalid-feedback">Este campo es requerido*</div>
					</div>

					<button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Sign In</button>

				</form>


			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->

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
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="<?=BASE_URL?>assets/js/ajax.js"></script>
	<script>
		window.onload = () => {
			login();
		}
		const base_url = "<?= BASE_URL ?>"
	</script>

</body>

</html>