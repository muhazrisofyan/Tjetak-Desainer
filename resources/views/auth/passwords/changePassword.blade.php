@extends('layouts.home')

@section('content')
<div class="w3-row" style="margin-top:80px">
  <div class="w3-col l3" style="">
      <div class="w3-border w3-content" style="width:80%;height:87vh">
          <ul>
            <li><a href="ubahemail1">ubah email</a></li>
            <li><a href="ubahpassword1">ubah password</a></li>
          </ul>
      </div>
  </div>

  <div class="w3-col l9">
      @if(session()->has('success'))
        <div class="w3-border" style="width:97%;height:87vh">
          <h1><i class="far fa-check-circle"></i>Password Berhasil Diubah</h1>
          <a href="/home">Kembali ke Beranda <i class="fas fa-arrow-right"></i></a>
          {{-- <a href="#"><i class="fas fa-arrow-right"></i></a> --}}
        </div>
      @else
        <div class="w3-border" style="width:97%;height:87vh">
            <h2>Ubah Informasi Password</h2>
            <hr>

            <form class="" action="/changePassword" method="POST">
              {{-- Masukkan password lama box --}}
              <div class="w3-padding-8 box w3-round">
                  <i class="fas fa-lock w3-small"></i>
                  {{-- input box --}}
                  <input id="current-password" type="password" name="current-password" required
                    style="width:400px" placeholder="Masukkan password lama"
                    onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
                  {{-- End of input box --}}

                  {{-- div for warning text --}}
                  @if ($errors->has('current-password'))
                    <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                        <strong>{{ $errors->first('current-password') }}</strong>
                    </div>
                  @endif
              </div>
              {{-- End of box --}}

              <br>

              {{-- Masukkan password baru box --}}
              <div class="w3-padding-8 box w3-round">
                  <i class="fas fa-lock w3-small"></i>
                  {{-- input box --}}
                  <input id="new-password" type="password" name="new-password" required
                    style="width:400px" placeholder="Masukkan password baru"
                    onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
                  {{-- End of input box --}}

                  {{-- div for warning text --}}
                  @if ($errors->has('new-password'))
                    <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                        <strong>{{ $errors->first('new-password') }}</strong>
                    </div>
                  @endif
              </div>
              {{-- End of box --}}

              <br>

              {{-- Konfirmasi password baru box --}}
              <div class="w3-padding-8 box w3-round">
                  <i class="fas fa-lock w3-small"></i>
                  {{-- input box --}}
                  <input id="new-password-confirm" type="password" name="new-password_confirmation" required
                    style="width:400px" placeholder="Konfirmasi password baru"
                    onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
                  {{-- End of input box --}}

                  {{-- div for warning text --}}
                  @if ($errors->has('new-password'))
                    <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                        <strong>{{ $errors->first('new-password') }}</strong>
                    </div>
                  @endif
              </div>
              {{-- End of box --}}

              {{-- Save Button --}}
              {{csrf_field()}}
              <button class="w3-padding w3-orange w3-hover-opacity w3-round
                w3-text-white width-100 w3-large" type="submit">Simpan</button>
              {{-- Button End --}}
            </form>

        </div>
      @endif

  </div>
</div>
@endsection
