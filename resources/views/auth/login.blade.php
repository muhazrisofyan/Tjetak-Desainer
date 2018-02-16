@extends('layouts.app')

@section('content')
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
    <p class="w3-text-white ssp-regular w3-large">Mulai Desain dan raih keuntunganmu.</p>

    {{-- White Div containing username and password --}}
    <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">

      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        {{-- Email --}}
        @if ($errors->has('email'))
            <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
        @endif
        <div class="w3-padding-8 box w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email"  class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-small w3-text-red width-100" style="text-align:left">

          </div>
        </div>

        {{-- Password --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password" type="password" name="password" required class="width-100" placeholder="Password" onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-left w3-small w3-text-red">

          </div>
          <a class="w3-right a-decoration-none w3-text-grey" href="{{ route('password.request') }}">Lupa password?</a>
        </div>

        <br>
        {{-- Checkbox remember me --}}
        <div class="w3-left">
          <label class="checkbox">
            <input class="w3-check color-grey w3-small" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span class="w3-text-grey">Ingat Saya</span>
          </label>
        </div>
        <br>
        <hr>
        {{-- Login Button --}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Login</button>
      </form>
    </div>
    <p class="ssp-regular w3-text-white w3-center w3-medium">Belum memiliki akun? <a class="a-decoration-none" href="register"><strong>Daftar Sekarang</strong> </a></p>

  </div>
</div>
@endsection
