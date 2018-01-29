@extends('layouts.master')

@section('content')
  {{-- landingpage banner --}}
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">

    </div>
  </div>
  {{-- End of Banner --}}

  <div class="w3-container w3-display-container w3-row w3-round w3-white" style="margin:3%">
    <div class="w3-threequarter">
      <h4>Tentang</h4>
      <h4>TJETAK DESAINER</h4>
      <p style="text-align:justify">Tjetak Designer adalah platform dimana Designer dapat bertemu dengan
        mereka yang membutuhkan jasa desain. Di sini, para desainer dapat bekerja
        secara online untuk memenuhi kebutuhan design yang ada dengan kemudahaan
        bekerja dimanapun.</p>
    </div>
    <div class="w3-quarter">
      <img class="w3-display-right w3-margin-right" src="{{url('img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" style="width:220px" alt="">
    </div>
  </div>

@endsection
