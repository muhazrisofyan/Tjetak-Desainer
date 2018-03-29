@extends('layouts.auth')

@section('content')
    {{-- White Div containing username and password --}}

    <div class="w3-display-middle s-full-box l-third" style="height:auto">
      <p class="w3-text-white ssp-regular w3-large" style="text-align:center">Masukkan email lama anda</p>
      <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">
      <form method="POST" action="{{ route('password.email')}}">
        {{ csrf_field() }}
        {{-- email --}}
        <div class="w3-padding-8 box w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email"  class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          <div class="w3-small w3-text-red width-100" style="text-align:left">

          </div>
          @if ($errors->has('email'))
              <div class="w3-small w3-text-red width-100" style="text-align:left">
                <strong>{{ $errors->first('email') }}</strong>
              </div>
          @endif
        </div>
        <hr>
        {{-- Password Reset Button --}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Send Password Reset Link</button>
      </form>
    </div>

  </div>
</div>

@endsection
