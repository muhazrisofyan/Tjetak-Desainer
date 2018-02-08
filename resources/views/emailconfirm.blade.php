@extends('layouts.app')

@section('content')
  {{-- After verification page --}}
  <div class="w3-display-middle s-full-box l-third" style="height:auto">
    <h2 class="w3-text-white margin-bottom-min20 ssp-bold">Halo Desainer!</h2>
    <p class="w3-text-white ssp-regular w3-large">Email anda berhasil diverifikasi</p>
    <p class="w3-text-white ssp-regular w3-large margin-top-min20">Click disini untuk <strong><a class="ssp-bold a-decoration-none" href="{{route('login')}}">Login</a></strong></p>
  </div>
@endsection
