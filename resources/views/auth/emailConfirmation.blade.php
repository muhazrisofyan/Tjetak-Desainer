@extends('layouts.auth')

@section('content')
  {{-- After verification page --}}
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
    <p class="w3-text-white ssp-regular w3-large">Email anda berhasil diverifikasi</p>
    <p class="w3-text-white ssp-regular w3-large margin-top-min20">Dalam <span id="counter">7</span> detik anda akan diarahkan ke halaman login.</p>

    <script type="text/javascript">
    function countdown() {
        var i = document.getElementById('counter');
        if (parseInt(i.innerHTML)<=0) {
            location.href = '/login';
        }
        if (parseInt(i.innerHTML)>0) {
            i.innerHTML = parseInt(i.innerHTML)-1;
        }

    }
    setInterval(function(){ countdown(); },1000);
    </script>
  </div>
@endsection
