@extends('layouts.home')

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
    <form class="" action="/changeEmail" method="POST">
      <div class="w3-border" style="width:97%;height:87vh">
        <h2>Ubah Informasi Email</h2>
        <hr>
        @if (count($errors) > 0)
          {{$errors}}
        @endif

        {{-- Email Baru --}}
        <label class="w3-text-black"><b>Email Baru</b></label>
        <div class="" style="width:500px">
          <input class="w3-input w3-border" name="email" type="email">
        </div>

        {{csrf_field()}}
        <button class="w3-padding w3-orange w3-hover-opacity w3-round w3-text-white width-100 w3-large" type="submit">Verifikasi Email</button>
      </div>
    </form>
  </div>
</div>
@endsection
