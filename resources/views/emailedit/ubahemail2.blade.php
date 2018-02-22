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
      <h2>Ubah Informasi Email</h2>
      <hr>
      <p>Link verifikasi sudah dikirimkan ke email baru Anda. Silahkan
         melakukan verifikasi dengan mengklik link yang sudah dikirimkan.</p>
      {{-- Email Baru --}}
      <div class="" style="width:500px">
        <input class="w3-input w3-border" name="first" type="text"
          placeholder="callus-studio@callus.com" disabled>
      </div>
    </div>
  </div>
</div>
@endsection
