<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nairametrics') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/others.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('/img/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('/img/favicon.png')}}">

</head>
<!-- Get dashboard url -->
<!-- End get dashboard url -->
<body style="background-color: #273a91;" onload="document.getElementById('dunner').style.display = 'none'; document.registration.radHear.hidden = true;
      document.frmReferrer.txtOther2.hidden = true;
      document.frmReferrer.txtOther.value = 'not applicable';">
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
