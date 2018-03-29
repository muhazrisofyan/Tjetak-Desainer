@extends('layouts.auth')

@section('content')
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <p class="w3-text-white ssp-regular w3-large">Reset Password Anda.</p>

    {{-- White Div containing username and password --}}
    <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">
      <form method="POST" action="{{ route('password.request') }}">

        <input type="hidden" name="token" value="{{ $token }}">

        {{-- Email --}}
        <div class="w3-padding-8 box w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email"  class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('email'))

              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('email') }}</strong>
              </div>
          @endif
        </div>


        {{-- Password --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password" type="password" name="password" required class="width-100" placeholder="New Password" onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('password'))

              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif

        </div>

        {{--Confirm Password --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password-confirm" type="password" name="password_confirmation" required class="width-100" placeholder="New Password Confirmation" onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('password'))

              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif

        </div>
        <hr>
        {{-- Login Button --}}
        {{ csrf_field() }}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Reset Password</button>
      </form>
    </div>


  </div>
</div>


@endsection
