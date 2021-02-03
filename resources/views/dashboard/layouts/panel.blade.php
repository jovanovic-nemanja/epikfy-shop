<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<title>@yield('title', trans('dashboard.title'))</title>
	{!! Html::style('/epikfy-bower/bootstrap/dist/css/bootstrap.css') !!}
	{!! Html::style('/epikfy-bower/font-awesome/css/font-awesome.min.css') !!}
	<style>
		html {
			position: relative;
			min-height: 100%;
		}
		body {
			margin-top: 60px;
			margin-bottom: 60px;
		}
	</style>
</head>
<body>
	<header>
		@include ('dashboard.partials.nav')

	</header>

	<div class="container">
		@include ('dashboard.partials.alert')
		<section>
			<div class="page-header">
				<h3>
					<i class="glyphicon glyphicon-th-large"></i>&nbsp;
					@yield('sectionTitle', 'Dashboard')
				</h3>
			</div>

			@section('content') @show
		</section>
	</div>


	{!! Html::script('/epikfy-bower/jquery/dist/jquery.min.js') !!}
	{!! Html::script('/epikfy-bower/bootstrap/dist/js/bootstrap.min.js') !!}
</body>
</html>
