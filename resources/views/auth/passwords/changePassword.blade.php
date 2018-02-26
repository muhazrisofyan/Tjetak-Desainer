@extends('layouts.home')

@section('content')
<div class="w3-row" style="margin-top:80px">
  <div class="w3-col l3">
    <div class="w3-bar-block w3-content" style="width:80%">
      {{-- Button Ubah Email --}}
      <a href="changeEmail" class="w3-bar-item w3-button w3-hover-sand
        w3-white w3-hover-text-orange w3-text-grey" style="margin-bottom:2px">Ubah Email
        <i class="fas fa-angle-right w3-right" style="margin-top:4px"></i></a>
      {{-- Button Ubah Password --}}
      <a href="changePassword" class="w3-bar-item w3-button w3-hover-sand
        w3-white w3-hover-text-orange w3-text-grey">Ubah Password
        <i class="fas fa-angle-right w3-right" style="margin-top:4px"></i></a>
    </div>
  </div>

  <div class="w3-col l9">
      @if(session()->has('success'))
        <div class="w3-border box-width-80 box-width-normal box-width-93 w3-white child-margin-edge w3-round w3-card-2 box-height-450">
          <h1 class="w3-text-orange"><i class="far fa-check-circle"></i>Password Berhasil Diubah</h1>
          <a href="/home">Kembali ke Beranda <i class="fas fa-arrow-right"></i></a>
          {{-- <a href="#"><i class="fas fa-arrow-right"></i></a> --}}
        </div>
      @else
        <div class="w3-border box-width-80 box-width-normal box-width-93 w3-white child-margin-edge w3-round w3-card-2 box-height-450">
            <h2 class="w3-text-orange">Ubah Informasi Password</h2>
            <hr>

            <form class="" action="/changePassword" method="POST">
              {{-- Masukkan password lama box --}}
              <div class="w3-padding-8 box w3-round">
                  <i class="fas fa-lock w3-small"></i>
                  {{-- input box --}}
                  <input class="input-max-width input-min-width" id="current-password" type="password" name="current-password" required
                    placeholder="Masukkan password lama"
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
                  <input class="input-max-width input-min-width" id="new-password" type="password" name="new-password" required
                    placeholder="Masukkan password baru"
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
                  <input class="input-max-width input-min-width" id="new-password-confirm" type="password"
                    name="new-password_confirmation" required
                    placeholder="Konfirmasi password baru"
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
                w3-text-white w3-large" type="submit" style="margin-top:40px">Simpan</button>
              {{-- Button End --}}
            </form>

        </div>
      @endif

  </div>
</div>
@endsection
