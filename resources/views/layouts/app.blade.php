<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style media="screen">
      body,html{
        height: 100%;
        background: linear-gradient(135deg, #FFB000, #FE5001) fixed;
      }
    </style>
</head>
<body>
  <div class="w3-display-container" style="min-height: 100%;">
    {{-- Header logo tjetak --}}
    <div class="w3-display-topleft w3-padding-8">
      <a href="/"><img class="w3-padding" src="{{asset('storage/img/a_main_banner/logo_tjetak_desainer_x1_putih.png')}}" style="width: 200px;"></a>
    </div>
    {{-- End of Header --}}



    @yield('content')



    {{-- Footer Start --}}
    <footer>
      <div id="footer" class="w3-bar w3-white w3-border w3-tiny w3-row w3-padding w3-padding-24">
        <div class="w3-half">
          <div class="w3-row w3-hide-small">
            <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
            style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile"> &copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
              DKI Jakarta 10350, Indonesia</span></div>
          </div>
          <div class="w3-row w3-hide-large w3-hide-medium text-center">
            <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
            style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile" style="white-space:nowrap">&copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
              DKI Jakarta 10350, Indonesia</span></div>
          </div>
        </div>

        <div class="w3-half w3-text-blue">
          <div class="w3-right w3-hide-small">
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Tentang Kami</a>
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Kebijakan Privasi</a>
          </div>
          <div class="text-center w3-hide-medium w3-hide-large">
            <a class="c-link w3-container w3-mobile footerlink" href="#">Tentang Kami</a>
            <a class="c-link w3-container w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
            <a class="c-link w3-container w3-mobile footerlink" href="#">Kebijakan Privasi</a>
          </div>
        </div>

      </div>
    </footer>
    {{-- Footer End --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
