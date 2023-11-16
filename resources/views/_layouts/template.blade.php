<?php
$basePath = env('APP_BASE_PATH', false);
$anio = date("Y");
?>

<!DOCTYPE html>
<html lang="es">
<!-- begin::Head -->
<head>
	<title>{{config('app.name','Mejor CRM (DATACRM) ')}} <?php echo $anio; ?> </title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="author" content="Diego Guevara" />
	<meta name="keywords" content="CRM, DATA, SOFTWARE, MÓVIL, NEGOCIO, ACTIVIDADES" />
	<meta name="description" content="¡Información actualizada con DataCRM a donde vayas!" />
	@include('_partials.css')
</head>
<head>
<!-- end::Head -->

<!-- begin::Body -->
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" tabindex="0">

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none">
		<symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
			<path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
		</symbol>
	</svg>

	<!--begin::Header-->
	@include('_partials.header')
	<!--end::Header-->

	<!--begin::Content-->
	<div class="">
		@yield('content')
	</div>
	<!-- end:: Content -->

	<!--begin::footer-->

	@include('_partials.footer')
	<!--end::footer-->

	@include('_partials.scripts')
	@stack('scripts')
</body>
<!-- end::Body -->
</html>
