{{-- {{__('mail_reset.msg_change_email')}}

{{__('mail_reset.msg_move_url')}}
{{ url('changeEmail/'.$token.'/') }}

・{{__('mail_reset.msg_move_url')}}
・{{__('mail_reset.msg_user_delete')}}


※ {{__('mail_reset.msg_note')}}

──────────────────────────────────　
　Hoge
──────────────────────────────────　
web  : {{url('/')}}
email: hoge@hoge.com
────────────────────────────────── --}}
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Email Verification</title>
    <style media="screen">
      .w3-padding{padding:8px 16px!important}
      .w3-center{text-align:center!important}
      .w3-content{max-width:980px;margin:auto}.w3-rest{overflow:hidden}
      .w3-light-grey{color:#000!important;background-color:#f1f1f1!important}
      .w3-text-grey{color:#757575!important}
      .w3-white{color:#000!important;background-color:#fff!important}
      .w3-button{
        border:none;
        display:inline-block;
        padding:8px 16px;
        vertical-align:middle;
        overflow:hidden;
        text-decoration:none;
        color:inherit;
        background-color:inherit;
        text-align:center;
        cursor:pointer;
        white-space:nowrap
      }
      .w3-orange,.w3-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
      .w3-round-small{border-radius:2px}
      .w3-round,.w3-round-medium{border-radius:4px}
      .w3-round-large{border-radius:8px}
      .w3-round-xlarge{border-radius:16px}
      .w3-round-xxlarge{border-radius:32px}
      .w3-text-white{color:#fff!important}
    </style>
  </head>
  <body>
    <div class="w3-light-grey w3-padding w3-center">

      <div class="w3-content w3-white w3-center w3-round-large" style="width:100%;margin-top:32px;margin-bottom:32px">
        <h1 style="padding-top:32px!important;padding-bottom:32px!important">Verifikasi Email</h1>
        <p style="color:#757575!important">Untuk konfirmasi perubahan email anda, silahkan klik tombol dibawah.</p>
        <div style="padding-top:24px!important;padding-bottom:24px!important">
          <a class="w3-button w3-orange w3-text-white w3-margin w3-round" href="{{ url('changeEmail/'.$token.'/') }}">Konfirmasi</a>
        </div>
        <p style="color:#757575!important" class="w3-left">Jika anda tidak melakukan perubahan ini, silahkan abaikan email ini.</p>
      </div>
    </div>
  </body>
</html>
