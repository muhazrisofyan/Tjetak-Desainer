@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Daftar Desainer Tjetak</h2>
    <p class="w3-text-white ssp-regular w3-large">Mulai Desain dan raih keuntunganmu.</p>

    {{-- White Div containing username and password --}}
    <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">
      <form method="POST" action="{{ route('register') }}">


        {{-- User Name --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-user w3-small"></i>
          <input id="user" type="text"  class="width-100" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" required autofocus onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('email'))
            <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                <strong>{{ $errors->first('email') }}</strong>
            </div>
          @endif
        </div>

        {{-- User Email --}}
        <div class="w3-padding-8 box w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email" required class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('email'))

              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('email') }}</strong>
              </div>
          @endif
        </div>

        {{-- Phone Number --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-mobile-alt w3-small"></i>
          <input id="phone" type="tel" name="phone" required class="width-100" placeholder="Nomor Telepon" value="{{ old('phone') }}" required onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('phone'))
              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('phone') }}</strong>
              </div>
          @endif
        </div>

        {{-- Password --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password" type="password" name="password" class="width-100" placeholder="Password" value="{{ old('password') }}" required onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          {{-- div for warning text --}}
          <div class="w3-small w3-text-red width-100" style="text-align:left"></div>
          @if ($errors->has('password'))
              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif
        </div>

        {{-- Password Confirm --}}
        <div class="w3-padding-8 box w3-round">
          <i class="fas fa-lock w3-small"></i>
          <input id="password-confirm" type="password" name="password_confirmation" class="width-100" placeholder="Confirm Password" value="{{ old('password') }}" required onblur="cek(this.id , this.value)" onkeyup="cek(this.id , this.value)">
          <div class="w3-small w3-text-red width-100" style="text-align:left">

          </div>
          @if ($errors->has('password_confirmation'))
              <div class="w3-small w3-text-red w3-center width-100" style="text-align:left">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif
        </div>

        <hr>
        {{ csrf_field() }}
        {{-- Register Button --}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Lanjutkan</button>
      </form>
    </div>
    <p class="ssp-regular w3-text-white w3-center w3-medium">Sudah memiliki akun? <a class="a-decoration-none" href="login"><strong>Masuk di sini.</strong> </a></p>

  </div>
</div>
@endsection
