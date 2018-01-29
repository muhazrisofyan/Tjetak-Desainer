<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tjetak Designer</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    {{-- Header --}}
    <div id="header" class="w3-top w3-bar w3-white w3-padding">
      <img class="w3-padding w3-hover-opacity" src="{{url('img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" alt="">
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a class="w3-btn w3-round w3-border button" href="/login">Masuk Sebagai Desainer</a>
          <a class="w3-btn w3-round w3-blue w3-border button" href="/register">Daftar Sebagai Desainer</a>
        </div>
      </div>
    </div>
    {{-- End of Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End of Content --}}

    {{-- Footer --}}

    {{-- End of Footer --}}
  </body>
</html>
