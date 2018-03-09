@extends('layouts.app')

@section('content')
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

    {{-- White Div containing username and password --}}

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
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
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
