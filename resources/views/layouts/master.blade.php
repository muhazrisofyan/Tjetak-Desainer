<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tjetak Designer</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    {{-- Header --}}
    <div id="header" class="w3-top w3-bar w3-white w3-padding-8 w3-border">
      <img class="w3-padding w3-hover-opacity" src="{{asset('storage/img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" alt="">
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-medium w3-hide-small">
          <a class="w3-btn w3-round w3-border c-button w3-small" href="/login">Masuk Sebagai Desainer</a>
          <a class="w3-btn w3-round w3-blue w3-border c-button w3-small" href="/register">Daftar Sebagai Desainer</a>
        </div>

        {{-- Mobile Dropdown --}}
        <button onclick="myFunction('Demo1')" class="w3-btn w3-right w3-hide-large"><i id="bar" class="w3-xlarge fa fa-bars" aria-hidden="true"></i></button>

        <div id="Demo1" class="w3-hide w3-margin-top ssp-regular w3-padding w3-hide-large">
          <a href="">
            <button class="width-100 w3-btn w3-round w3-border w3-small" type="button" name="button">Masuk Sebagai Desainer</button>
          </a>
          <a href="">
            <button class="width-100 w3-margin-top w3-btn w3-round w3-blue w3-border w3-small" type="button" name="button">Daftar Sebagai Desainer</button>
          </a>
        </div>
        {{-- End of Mobile Dropdown --}}
      </div>
    </div>

    {{-- End of Header --}}

    {{-- Content --}}
    @yield('content')
    {{-- End of Content --}}

    {{-- Footer --}}
    <div id="footer" class="w3-bar w3-white w3-padding w3-border">

        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a class="w3-btn w3-round w3-border button w3-small" href="/login">Masuk Sebagai Desainer</a>
          <a class="w3-btn w3-round w3-blue w3-border button w3-small" href="/register">Daftar Sebagai Desainer</a>
        </div>
      </div>
    </div>
    {{-- End of Footer --}}

    {{-- Header and footer script --}}
    <script>
    function myFunction(id) {
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
    </script>
    {{-- End of Script --}}
  </body>
</html>
