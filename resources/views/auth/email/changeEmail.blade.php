@extends('layouts.home')

@section('content')
<div class="w3-row" style="margin-top:80px">

  {{-- Box ubah email and ubah password --}}
  <div class="w3-col l3">
    <div class="w3-bar-block w3-content box-width-93 box-width-80p">
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
    <form class="" action="/changeEmail" method="POST">
      <div class="w3-border box-width-80 box-width-normal box-width-93 w3-white child-margin-edge w3-round w3-card-2 box-height-450">

        <h2 class="w3-text-orange">Ubah Informasi Email</h2>
        <hr>

        @if (count($errors) > 0)
          {{$errors}}
        @endif

        {{-- Masukkan Email baru box --}}
        <div class="w3-padding-8 box w3-round">
            <i class="fas fa-lock w3-small"></i>
            {{-- input box --}}
            <input class="input-max-width input-min-width" name="email" type="email"
              placeholder="Masukkan email baru"
              onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
            {{-- End of input box --}}
        </div>

        {{csrf_field()}}

        <button class="w3-padding w3-orange w3-hover-opacity w3-round
          w3-text-white w3-large" type="submit" style="margin-top:40px">Verifikasi Email</button>
      </div>
    </form> --}}
    @if(session()->has('success'))
      <div class="w3-border box-width-80 box-width-normal box-width-93 w3-white child-margin-edge w3-round w3-card-2 box-height-450">
        <h1 class="w3-text-orange"><i class="far fa-check-circle"></i>Sebuah email konfirmasi telah dikirim ke email lama anda, silahkan cek email untuk melanjutkan.</h1>
        <a href="/home">Kembali ke Beranda <i class="fas fa-arrow-right"></i></a>
        {{-- <a href="#"><i class="fas fa-arrow-right"></i></a> --}}
      </div>
    @else
      <div class="w3-border box-width-80 box-width-normal box-width-93 w3-white child-margin-edge w3-round w3-card-2 box-height-450">
          <h2 class="w3-text-orange">Ubah Informasi Email</h2>
          <hr>

          <form class="" action="/changeEmail" method="POST">
            {{-- Masukkan password lama box --}}
            <div class="w3-padding-8 box w3-round">
                <i class="fas fa-envelope w3-small"></i>
                {{-- input box --}}
                <input class="input-max-width input-min-width" id="current-password" type="email" name="email" required
                  placeholder="Masukkan email baru"
                  onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
                {{-- End of input box --}}

                {{-- div for warning text --}}
                @if ($errors->has('email'))
                  <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                      <strong>{{ $errors->first('email') }}</strong>
                  </div>
                @endif
            </div>
            {{-- End of box --}}


            {{-- Save Button --}}
            {{csrf_field()}}
            <button class="w3-padding w3-orange w3-hover-opacity w3-round
              w3-text-white w3-large" type="submit" style="margin-top:40px">Ubah</button>
            {{-- Button End --}}
          </form>

      </div>
    @endif
  </div>


</div>
@endsection
