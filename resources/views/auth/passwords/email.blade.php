@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="w3-display-container" style="min-height: 100%;">
  <div class="w3-display-topleft w3-padding-8">
    <img class="w3-padding" src="{{asset('storage/img/a_main_banner/logo_tjetak_desainer_x1_putih.png')}}" style="width: 200px;">
  </div>
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
    <p class="w3-text-white ssp-regular w3-large">Reset Password</p>
    <p class="w3-text-white ssp-regular w3-large margin-top-min20">Masukan Email Anda</p>

    {{-- White Div containing username and password --}}
    <div class="w3-center w3-padding-large w3-white w3-round-large w3-border ssp-regular" style="width:100%;height:auto;">
      <form method="POST" action="{{ route('password.email')}}">
        {{ csrf_field() }}
        {{-- Username --}}
        <div class="w3-padding-8 search w3-round">
          <i class="far fa-envelope w3-small"></i>
          <input id="email" type="email"  class="width-100" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <hr>
        {{-- Login Button --}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Send Password Reset Link</button>
      </form>
    </div>

  </div>
</div>

<footer>
  <div id="footer" class="w3-bar w3-white w3-border w3-tiny w3-row w3-padding w3-padding-24">
    <div class="w3-half">
      <div class="w3-row w3-hide-small">
        <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
        style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile"> &copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
          DKI Jakarta 10350, Indonesia</span></div>
      </div>
      <div class="w3-row w3-hide-large w3-hide-medium text-center">
        <div><img src="{{asset('storage/img/a_main_banner/tjetak_logo.png')}}"
        style="width:13px;" alt="Logo T Tjetak"><span class="w3-mobile" style="white-space:nowrap">&copy; Tjetak, Jalan Timor No. 6, Menteng, Jakarta Pusat,
          DKI Jakarta 10350, Indonesia</span></div>
      </div>
    </div>

    <div class="w3-half w3-text-blue">
      <div class="w3-right w3-hide-small">
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Tentang Kami</a>
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
        <a class="c-link w3-container w3-cell w3-mobile footerlink" href="#">Kebijakan Privasi</a>
      </div>
      <div class="text-center w3-hide-medium w3-hide-large">
        <a class="c-link w3-container w3-mobile footerlink" href="#">Tentang Kami</a>
        <a class="c-link w3-container w3-mobile footerlink" href="#">Syarat &amp; ketentuan</a>
        <a class="c-link w3-container w3-mobile footerlink" href="#">Kebijakan Privasi</a>
      </div>
    </div>

  </div>
</footer>
@endsection
