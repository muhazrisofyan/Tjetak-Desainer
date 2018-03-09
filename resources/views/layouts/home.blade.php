<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tjetak Designer</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/fontawesome-all.css" type="text/css">
    <link rel="stylesheet" href="/css/jobcenter.css">
    <link rel="stylesheet" href="/css/emailandpasswordstyle.css" type="text/css">
    <style media="screen">
    </style>

  </head>
  <body>
    {{-- Header --}}

    <div id="header" class="w3-top w3-bar w3-white w3-padding-8 w3-border">
      <a href="/"><img class="w3-padding"
        src="{{asset('img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}"
        alt="Logo Tjetak"></a>
      <a class="a-decoration-none c-button w3-hide-small w3-hide-medium" href="home">Job Center</a>
      <a class="a-decoration-none c-button w3-hide-small w3-hide-medium" href="#">Job Saya</a>
      <a class="a-decoration-none c-button w3-hide-small w3-hide-medium" href="#">Bantuan</a>

        <div class="w3-right w3-hide-medium w3-hide-small">

          {{-- Profile Button --}}
          <div class="w3-dropdown-click w3-hover-white w3-white w3-right">
            <button class="w3-btn w3-circle w3-border c-button w3-small"
              onclick="myFunction()" style="width:39px;">
              <i class="fas fa-user" style="font-size:18px;margin-left:-6px"></i>
            </button>
            <div id="demo" class="w3-dropdown-content w3-bar-block w3-border w3-card" style="position:fixed;margin-left:-100px;margin-top:7px">
              {{-- Change Profile Information Link --}}
              <a href="changeEmail" class="w3-bar-item w3-button a-decoration-none">Ubah Informasi Profil</a>
              {{-- Log Out Link --}}
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class="w3-bar-item w3-button a-decoration-none">Keluar
              </a>
            </div>
          </div>
        </div>

        {{-- Mobile Dropdown --}}

        {{-- Button Bar --}}
        <button onclick="show('mobileNav')" class="c-button-burger w3-right w3-hide-large w3-cell-middle w3-padding-8">
          <i id="bar" class="w3-xlarge fa fa-bars" aria-hidden="true"></i></button>

        {{-- Notification Button --}}
        <a class="c-button w3-small w3-right" href="/login" style="">
          <i class="far fa-bell" style="font-size:18px;margin-top:10px;"></i>
        </a>
        {{-- Dropdown Navigation --}}
        <div id="mobileNav" class="w3-hide w3-margin-top ssp-regular w3-padding w3-hide-large">
          <a href="/home">
            <button class="width-100 w3-padding w3-round w3-hover-sand w3-border w3-small"
              type="button" name="button">Job Center</button>
          </a>

          <a href="">
            <button class="width-100 w3-padding w3-round w3-hover-sand w3-border w3-small"
              type="button" name="button">Job Saya</button>
          </a>

          <a href="">
            <button class="width-100 w3-padding w3-round w3-hover-sand w3-border w3-small"
              type="button" name="button">Bantuan</button>
          </a>

          <a href="/changeEmail">
            <button class="width-100 w3-padding w3-round w3-hover-sand w3-border w3-small"
              type="button" name="button">Ubah Informasi Profil</button>
          </a>

          <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"
            class="width-100 w3-margin-top w3-btn w3-round w3-orange
              w3-border w3-small w3-text-white">
            Keluar
          </a>
        </div>
        {{-- End of Mobile Dropdown --}}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>

    {{-- End of Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End of Content --}}

    {{-- Footer --}}
    <footer class="footer">
      <div class="w3-bar w3-white w3-border w3-tiny w3-row w3-padding w3-padding-24">
        <div class="w3-half">
          <div class="w3-row w3-hide-small">
            <div><img src="{{asset('img/a_main_banner/tjetak_logo.png')}}"
            style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile"> &copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
              DKI Jakarta 10350, Indonesia</span></div>
          </div>
          <div class="w3-row w3-hide-large w3-hide-medium text-center">
            <div><img src="{{asset('img/a_main_banner/tjetak_logo.png')}}"
            style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile" style="white-space:nowrap">&copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
              DKI Jakarta 10350, Indonesia</span></div>
          </div>
        </div>

        <div class="w3-half w3-text-blue">
          {{-- footer-right on large screen --}}
          <div class="w3-right w3-hide-small">
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Tentang Kami</a>
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
            <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Kebijakan Privasi</a>
          </div>

          {{-- footer-right on small screen --}}
          <div class="text-center w3-hide-medium w3-hide-large">
            <a class="c-link w3-container w3-mobile footerlink" href="#">Tentang Kami</a>
            <a class="c-link w3-container w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
            <a class="c-link w3-container w3-mobile footerlink" href="#">Kebijakan Privasi</a>
          </div>
        </div>

      </div>
    </footer>

    {{-- End of Footer --}}

    {{-- Header and footer script --}}
    <script>
    function show(id) {
        var x = document.getElementById(id);
        var bar = document.getElementById("bar");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            bar.classList.remove('fa-bars');
            bar.classList.add('fa-times');
        } else {
            x.className = x.className.replace(" w3-show", "");
            bar.classList.remove('fa-times');
            bar.classList.add('fa-bars');
        }
    }
    function myFunction() {
        var x = document.getElementById("demo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>
    {{-- End of Script --}}
  </body>
</html>
