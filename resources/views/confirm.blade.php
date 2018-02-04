@extends('layouts.app')

@section('content')
  <div class="w3-display-container" style="min-height: 100%;">
    <div class="w3-display-topleft w3-padding-8">
      <img class="w3-padding" src="{{asset('storage/img/a_main_banner/logo_tjetak_desainer_x1_putih.png')}}" style="width: 200px;">
    </div>
    <div class="w3-display-middle s-full-box l-third" style="height:auto">
      <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
      <p class="w3-text-white ssp-regular w3-large">Anda telah berhasil registrasi</p>
      <p class="w3-text-white ssp-regular w3-large margin-top-min20">Buka email untuk verifikasi.</p>

      {{-- White Div containing username and password --}}

    </div>
  </div>

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
@endsection
