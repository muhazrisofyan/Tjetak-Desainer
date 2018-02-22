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
      <h1><i class="far fa-check-circle"></i>Email Berhasil Diubah</h1>
      <a href="#">Kembali ke Beranda</a>
      <a href="#"><i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</div>
@endsection
