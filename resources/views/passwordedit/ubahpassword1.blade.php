@extends('auth.layout')

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
      <div class="w3-border" style="width:97%;height:87vh">
          <h2>Ubah Informasi Password</h2>
          <hr>

          {{-- Masukkan password lama box --}}
          <div class="w3-padding-8 box w3-round">
              <i class="fas fa-lock w3-small"></i>
              {{-- input box --}}
              <input id="password" type="password" name="password" required
                style="width:400px" placeholder="Masukkan password lama"
                onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
              {{-- End of input box --}}

              {{-- div for warning text --}}
              <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          </div>
          {{-- End of box --}}

          <br>

          {{-- Masukkan password baru box --}}
          <div class="w3-padding-8 box w3-round">
              <i class="fas fa-lock w3-small"></i>
              {{-- input box --}}
              <input id="password" type="password" name="password" required
                style="width:400px" placeholder="Masukkan password baru"
                onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
              {{-- End of input box --}}

              {{-- div for warning text --}}
              <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          </div>
          {{-- End of box --}}

          <br>

          {{-- Konfirmasi password baru box --}}
          <div class="w3-padding-8 box w3-round">
              <i class="fas fa-lock w3-small"></i>
              {{-- input box --}}
              <input id="password" type="password" name="password" required
                style="width:400px" placeholder="Konfirmasi password baru"
                onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
              {{-- End of input box --}}

              {{-- div for warning text --}}
              <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          </div>
          {{-- End of box --}}

          {{-- Save Button --}}
          <button class="w3-padding w3-orange w3-hover-opacity w3-round
            w3-text-white width-100 w3-large" type="submit">Simpan</button>
          {{-- Button End --}}

      </div>
  </div>
</div>
@endsection
