@extends('layouts.home')

@section('content')
<div class="" style="margin-top:60px">
  {{-- Title --}}
  <div class="w3-center w3-padding-24 w3-content">
    <h1>Job Center</h1>
    <p>Ada 12 permintaan jasa desain</p>
    <div class="w3-padding-8 box w3-round w3-padding">
      <i class="fas fa-search w3-small" style="margin-left:20px;margin-top:2px"></i>
      <input id="search" type="text"  class="width-100" placeholder="Cari nama job atau produk" name="search" value="{{ old('email') }}">
      {{-- div for warning text --}}
      <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
      @if ($errors->has('email'))
          <div class="w3-small w3-text-red  width-100" style="text-align:left">
              <strong>{{ $errors->first('email') }}</strong>
          </div>
      @endif
    </div>
  </div>

  {{-- Job Center boxes --}}
  <div class="w3-row w3-content" style="width:80%">
    {{-- contoh --}}
    <div class="w3-padding w3-col l3 m6">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5><a href="/jobdetail">Desain Poster</a>...</h5>
            <p>Rp. 1.250.000,00</p>
            <p style="font-size:13px">10 hari (11 Desember 2018)</p>
          </div>
          <div class="w3-padding-16">
            <button onclick="document.getElementById('id01').style.display='block'"
             class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3 m6">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3 m6">
      <div class="w3-card-4 w3-dark-grey" >
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16 m6">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3 m6">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3 m6">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
    {{-- contoh --}}
    <div class="w3-padding w3-col l3">
      <div class="w3-card-4 w3-dark-grey">
        <div class=" w3-center" style="line-height: 50%">
          <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          <div class="text-left w3-container">
            <h5>Desain Poster</h5>
            <p>Rp. 250.000,00</p>
            <p>2 hari (11 Januari 2018)</p>
          </div>

          <div class="w3-padding-16">
            <button class="w3-button w3-green">Ambil job ini</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End of Job Center boxes --}}

  {{-- Modal untuk mengambil job --}}
  <div class="w3-container">
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content" style="max-width:600px;width:100%">
        <header class="w3-container w3-blue">
          <h3>Konfirmasi Pengerjaan Desain</h3>
        </header>
        <div class="w3-container">
          <p>Anda akan mengambil permintaan job berikut ini:</p>
          <div class="w3-border w3-container">
            <p class="w3-left">Permintaan Desain: Poster</p>
            <p class="w3-right">Rp 250.000,00</p>
          </div>
          <p>Apakah anda yakin untuk mengambil job tersebut dan menyetujui
            <a href="#" target="_blank" class="w3-text-blue a-decoration-none">Syarat &amp; Ketentuan</a> yang diterapkan oleh Tjetak Desainer?
          </p>
        </div>
        <footer class="w3-row">
          <div class="w3-half w3-padding">
            <button class="width-100 w3-green w3-btn w3-hover-opacity" type="button" name="button">Ya</button>
          </div>
          <div class="w3-half w3-padding">
            <button class="width-100 w3-red w3-btn w3-hover-opacity"
             onclick="document.getElementById('id01').style.display='none'" type="button" name="button">Batalkan</button>
          </div>
        </footer>
      </div>
    </div>
  </div>

  {{-- Modal job tidak tersedia --}}
  <div class="w3-container">
    <div id="id02" class="w3-modal">
      <div class="w3-modal-content" style="max-width:400px;width:100%">
        <div class="w3-center ">
          <i class="far fa-frown w3-jumbo w3-margin-top"></i>
          <p>Mohon maaf job ini sudah tidak tersedia</p>
        </div>

        <footer class="w3-row">
          <div class="w3-padding">
            <button class="width-100 w3-green w3-btn w3-hover-opacity"
             onclick="document.getElementById('id02').style.display='none'" type="button" name="button">Oke</button>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>
@endsection
