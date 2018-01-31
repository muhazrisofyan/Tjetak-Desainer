@extends('layouts.master')

@section('content')
  {{-- landingpage banner --}}
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-container w3-display-left w3-row" style="">
      <div class="ssp-bold w3-col m12 l10 w3-text-white mobile-center">
        <h1 class="w3-xxlarge w3-animate-left little-spacing-after">Desain dan dapatkan pemasukan tambahan.</h1>
        <p class="w3-large">Rasakan manfaat menjadi desainer produk percetakan<br> kami dengan pemasukan tambahan
        yang kompetitif.</p>
      </div>
    </div>
  </div>
  {{-- End of Banner --}}

  {{-- Tentang Tjetak Desainer --}}
  <div class="w3-border w3-container w3-display-container w3-round w3-row w3-white w3-responsive w3-card-4" style="margin:3%">
    <div class="w3-col m7 l9">
      <h4 class="ssp-regular w3-text-grey">Tentang</h4>
      <h1 class="ssp-bold w3-text-orange c-text-bold margin-top-min20">TJETAK DESAINER</h1>
      <p class="ssp-regular text-justify">Tjetak Designer adalah platform dimana Designer dapat bertemu dengan
        mereka yang membutuhkan jasa desain. Di sini, para desainer dapat bekerja
        secara online untuk memenuhi kebutuhan design yang ada dengan kemudahaan
        bekerja dimanapun.</p>
    </div>
    <div class="w3-col m4 l3 w3-hide-small">
      <img class="w3-display-right w3-margin-right" src="{{asset('storage/img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" style="width:220px" alt="logo tjetak desainer">
    </div>
  </div>
  {{-- End of Tentang Tjetak Desainer --}}

  {{-- Cara Kerja --}}
  <div class="w3-border w3-container w3-display-container w3-round w3-row w3-white w3-responsive w3-card-4" style="margin:3%">
    <h4 class="ssp-regular w3-text-grey">Cara Kerja</h4>
    <h1 class="ssp-bold w3-text-orange c-text-bold margin-top-min20">TJETAK DESAINER</h1>
    <div class="ssp-regular w3-row">
      <div class="w3-center w3-third mobile-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_1.svg")}} alt="icon cara kerja 1">
        <p class="text-center w3-padding">Lihat pilihan dan detail pekerjaan dan terima pekerjaan yang diinginkan</p>
      </div>
      <div class="w3-center w3-third mobile-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_2.svg")}} alt="icon cara kerja 2">
        <p class="text-center w3-padding">Berikan desain yang sesuai dengan arahan spesifikasi dan lakukan revisi yang sesuai<br> *Ketentuan revisi 2-3 kali.</p>
      </div>
      <div class="w3-center w3-third mobile-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_3.svg")}} alt="icon cara kerja 3">
        <p class="text-center w3-padding">Begitu design diapprove, berikan file high resolution dan AI/Photoshop dan pendapatan anda akan langsung ditransfer ke rekening yang anda inginkan.</p>
      </div>
    </div>
  </div>
  {{-- End of Cara Kerja --}}

  {{-- Produk --}}
  <div class="w3-border w3-container w3-round w3-row w3-white w3-responsive w3-card-4" style="margin:3%">
    <h4 class="ssp-regular w3-text-grey">Desain untuk</h4>
    <h1 class="ssp-bold w3-text-orange c-text-bold margin-top-min20">PRODUK-PRODUK</h1>
    <div class="ssp-regular w3-row">
      @foreach ($files as $file)
        <div class="w3-third w3-padding ssp-regular">
          <a class="a-decoration-none" href="">
            <div class="w3-container w3-card-2 w3-round-large width-100 w3-margin-bottom">
              <img class="w3-image responsive w3-circle w3-left w3-margin" src={{asset("storage/img/d_produk/") . '/' . explode('/', $file)[3]}} alt="Gambar amplop">
              <p class="c-text-bold product-text-middle">{{str_replace("-", " ", substr(explode('/', $file)[3], 0, strlen(explode('/', $file)[3]) - 4))}}</p>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
  {{-- End of Produk --}}

  {{-- Keuntungan --}}
  <div class="w3-border w3-container w3-round w3-row w3-white w3-card-4" style="margin:3%">
    <h4 class="ssp-regular w3-text-grey">Keuntungan</h4>
    <h1 class="ssp-bold w3-text-orange c-text-bold margin-top-min20">TJETAK DESAINER</h1>
    <div class="w3-row width-100 w3-padding">
      <div class="w3-col m4 l3 w3-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_1.svg")}}>
      </div>
      <div class="w3-col m8 l9 mobile-center">
        <p class="w3-padding-24">Bekerja darimana saja</p>
      </div>
    </div>
    <div class="w3-row width-100 w3-padding">
      <div class="w3-col m4 l3 w3-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_2.svg")}}>
      </div>
      <div class="w3-col m8 l9 mobile-center">
        <p class="w3-padding-24">Dapat memilih jenis design mulai dari yang simple hingga complex</p>
      </div>
    </div>
    <div class="w3-row width-100 w3-padding w3-margin-bottom">
      <div class="w3-col m4 l3 w3-center">
        <img src={{asset("storage/img/c_cara_kerja/icon_cara_kerja_3.svg")}}>
      </div>
      <div class="w3-col m8 l9 w3-cell w3-cell-middle mobile-center">
        <p class="w3-padding-24">Dapatkan tambahan penghasilan</p>
      </div>
    </div>
  </div>
  {{-- End of Keuntungan --}}
@endsection
