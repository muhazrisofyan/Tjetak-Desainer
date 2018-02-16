<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" type="text/css">
  </head>
  <body>
    <div class="w3-light-grey w3-padding w3-center" style="height:100vh">
      <img class="w3-padding-32" style="width:200px" src="{{asset('storage/img/b_tentang_tjetak_desainer/Logo/logo_tjetak_desainer_x1.png')}}" alt="Logo Tjetak">

      <div class="w3-text-grey w3-content w3-container w3-white w3-center w3-round-large" style="width:100%">
        <h1 class="w3-padding-32">Email Verfication</h1>
        <p>Click the button below to activate your account.</p>
        <div class="w3-padding-24">
          <a class="w3-button w3-orange w3-text-white w3-margin w3-round" href="{{url('/verifyemail/'.$email_token)}}">Activate Account</a>
        </div>
      </div>
    </div>
  </body>
</html>
