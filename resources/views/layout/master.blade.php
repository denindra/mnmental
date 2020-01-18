<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Styles -->
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon.ico/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon.ico/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon.ico/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon.ico/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon.ico/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon.ico/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon.ico/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon.ico/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon.ico/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/favicon.ico/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon.ico/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon.ico/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon.ico/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('images/favicon.ico/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/favicon.ico//ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    @yield('content_head')
</head>

<body>
    @include('layout._nav')

    @yield('content')

    </main>
    @include('layout._footer')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>
    <div id="offcanvas-top" class="offcanvas bg-gray h-auto" data-animation="slide-down">
        <button type="button" class="close text-white" data-dismiss="offcanvas" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="row">
          <form class="col-md-8 mx-auto input-glass">
            <input class="form-control form-control-lg" type="text" placeholder="Search...">
          </form>
        </div>
      </div>

    @yield('content_footer')

</body>

</html>
