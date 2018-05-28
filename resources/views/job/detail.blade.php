@extends('layouts.home')

@section('content')
<div class="w3-content" style="margin-top:100px">
  <div class="w3-row">
    <div class="w3-threequarter w3-container">
      <div class="w3-border w3-border-blue w3-container w3-white w3-card">
        <h1>Permintaan Desain: Poster</h1>
        <div class="w3-row">
          <div class="w3-quarter">
            <img src="{{asset('img/img_avatar3.png')}}" alt="Avatar" style="width:100%">
          </div>
          <div class="w3-rest w3-container">
            <table>
              <tr>
                <td>Ukuran Kertas</td>
                <td>: A3</td>
              </tr>
              <tr>
                <td>Patokan Desain</td>
                <td>: file_patokan_desain.jpg</td>
              </tr>
              <tr>
                <td>Budget</td>
                <td>: Rp. 250.000,00</td>
              </tr>
              <tr>
                <td>Deadline</td>
                <td>: 2 hari(11 Januari 2018)</td>
              </tr>
            </table>
          </div>
        </div>

        <h3>Konten Desain:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h3>Keterangan Tambahan:</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="w3-quarter w3-container">
      <div class="w3-border w3-border-blue w3-container w3-white">
        <p>Untuk mengambil job desain produk ini, silahkan klik tombol Ambil job ini.</p>
        <div class="w3-padding-16">
          <button onclick="document.getElementById('id01').style.display='block'"
           class="w3-hover-opacity w3-green width-100" style="height:40px">Ambil job ini</button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- Modal untuk mengambil job --}}
<div class="w3-container">
  <div id="id01" class="w3-modal">
    <div class="w3-modal-content" style="max-width:600px;width:100%">
      <header class="w3-container w3-blue">
        <h3>Konfirmasi Pengerjaan Desain</h3>
      </header>
      <div class="w3-container">
        <p>Anda akan mengambil permintaan job berikut ini:</p>
        <div class="w3-border w3-container">
          <p class="w3-left">Permintaan Desain: Poster</p>
          <p class="w3-right">Rp 250.000,00</p>
        </div>
        <p>Apakah anda yakin untuk mengambil job tersebut dan menyetujui
          <a href="#" target="_blank" class="w3-text-blue a-decoration-none">Syarat &amp; Ketentuan</a> yang diterapkan oleh Tjetak Desainer?
        </p>
      </div>
      <footer class="w3-row">
        <div class="w3-half w3-padding">
          <button class="width-100 w3-green w3-btn w3-hover-opacity" type="button" name="button">Ya</button>
        </div>
        <div class="w3-half w3-padding">
          <button class="width-100 w3-red w3-btn w3-hover-opacity"
           onclick="document.getElementById('id01').style.display='none'" type="button" name="button">Batalkan</button>
        </div>
      </footer>
    </div>
  </div>
</div>
@endsection
