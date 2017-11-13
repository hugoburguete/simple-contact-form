<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bluebolt</title>

    <!-- Fonts -->
    <link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="app">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ route('contact-message.index') }}">Messages</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
		<div class="content row">
			<div class="col-md-6 col-md-offset-3">
				@yield('content')
			</div>
		</div>
	</div>
    <script src="{{ url('/js/app.js') }}"></script>
</body>
</html>