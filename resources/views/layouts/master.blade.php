<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" ng-app="Epikfy">
<head>
	@section('metaLabels')
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="/">
		<meta name="description" content="">
		<meta name="author" content="">
	@show

	<link rel="icon" href="favicon.ico">
	<title>@section('title'){{ $company['description'] }} @show</title>

	<script type="text/javascript">
	FileAPI = {
		debug: true
	};
	</script>

	{{-- Epikfy CSS files --}}
	{!! Html::style('/epikfy-bower/bootstrap/dist/css/bootstrap.css') !!}
	@section('css')
		{!! Html::style('/epikfy-bower/angular-notify/dist/angular-notify.min.css') !!}
		{!! Html::style('/epikfy-bower/font-awesome/css/font-awesome.min.css') !!}
		{!! Html::style('/css/carousel.css') !!}
		{!! Html::style('/css/angucomplete-alt.css') !!}
		{!! Html::style('/css/app.css') !!}
	@show

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<section class = "@yield('page_class', 'home')">

	{{-- Navigation bar section --}}
	@section('navigation')
		@include('partial.navigation')
	@show

	{{-- Breadcrumbs section --}}
	<div class="container">
		@section('breadcrumbs')
			<div class="row">&nbsp;</div>
		@show
	</div>

	{{-- Content page --}}
	@section('content')
		@section('panels')

			<div class="container">
				<div class="row">&nbsp;</div>
				<div class="row global-panels">

					{{-- left panel --}}
					@if (isset($panel['left']))
						{{-- desktops validation --}}
						<div class="col-sm-{{ $panel['left']['width'] or '2' }} col-md-{{ $panel['left']['width'] or '2' }} {{ $panel['left']['class'] or '' }}">
							@section('panel_left_content')
								Left content
							@show
						</div>
					@endif

					{{-- center content --}}
					<div class="col-xs-12 col-sm-{{ $panel['center']['width'] or '10' }} col-md-{{ $panel['center']['width'] or '10' }}">
						@section('center_content')
							Center content
						@show
					</div>

					{{-- right panel --}}
					@if (isset($panel['right']))
						<div class="hidden-xs col-sm-{{ $panel['right']['width'] or '2' }} col-md-{{ $panel['right']['width'] or '2' }} {{ $panel['right']['class'] or '' }}">
							@section('panel_right_content')
								Right content
							@show
						</div>
					@endif

				</div> {{-- globlas panels --}}
			</div> {{-- container --}}

		@show
	@show

</section>

@section('footer')
	<footer>
		@include('partial.footer')
	</footer>
@show

{{-- epikfy - Bower Components --}}
{!! Html::script('/epikfy-bower/jquery/dist/jquery.min.js') !!}
{!! Html::script('/epikfy-bower/angular/angular.min.js') !!}
{!! Html::script('/epikfy-bower/angular-route/angular-route.min.js') !!}
{!! Html::script('/epikfy-bower/angular-sanitize/angular-sanitize.min.js') !!}
{!! Html::script('/epikfy-bower/angular-bootstrap/ui-bootstrap-tpls.min.js') !!}
{!! Html::script('/epikfy-bower/angular-animate/angular-animate.min.js') !!}
{!! Html::script('/epikfy-bower/angular-loading-bar/build/loading-bar.min.js') !!}
{!! Html::script('/epikfy-bower/angular-mocks/angular-mocks.js') !!}
{!! Html::script('/epikfy-bower/angular-touch/angular-touch.min.js') !!}
{!! Html::script('/epikfy-bower/bootstrap/dist/js/bootstrap.min.js') !!}

{!! Html::script('/js/vendor/xtForms/xtForm.js') !!}
{!! Html::script('/js/vendor/xtForms/xtForm.tpl.min.js') !!}

<script>

	/**
	 * ngModules
	 * Angularjs modules requires by epikfy
	 * @type {Array}
	 */
	var ngModules = [
		'ngRoute', 'ngSanitize', 'LocalStorageModule',
		'ui.bootstrap', 'chieffancypants.loadingBar', 'xtForm',
		'cgNotify', 'ngTouch', 'angucomplete-alt'
	];

	@section('before.angular') @show

	(function(){
		angular.module('Epikfy', ngModules,
		function($interpolateProvider){
			$interpolateProvider.startSymbol('[[');
			$interpolateProvider.endSymbol(']]');
		}).config(function(localStorageServiceProvider, cfpLoadingBarProvider,$locationProvider){
			cfpLoadingBarProvider.includeSpinner = false;
			localStorageServiceProvider.setPrefix('tb');
			$locationProvider.html5Mode({enabled:true,rewriteLinks:false});
		});

		angular.module('Epikfy').constant('CSRF_TOKEN', '{{ csrf_token() }}');
	})();

</script>

{{-- Epikfy functions --}}
{!! Html::script('/js/app.js') !!}

@section('scripts')
	{{-- Epikfy angucomplete-alt.js version --}}
	{!! Html::script('/js/vendor/angucomplete-alt.js') !!}

	{{-- epikfy-bower components --}}
	{!! Html::script('/epikfy-bower/angular-notify/dist/angular-notify.min.js') !!}
	{!! Html::script('/epikfy-bower/angular-local-storage/dist/angular-local-storage.min.js') !!}
@show

</body>
</html>
