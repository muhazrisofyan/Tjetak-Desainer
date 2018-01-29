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
    <div class="w3-top">
      <img class="w3-padding" width="250px" src="{{url('img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" alt="">
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a href="#projects" class="w3-bar-item w3-button">Projects</a>
          <a href="#about" class="w3-bar-item w3-button">About</a>
          <a href="#contact" class="w3-bar-item w3-button">Contact</a>
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
