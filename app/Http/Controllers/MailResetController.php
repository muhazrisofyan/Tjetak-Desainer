<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use MailReset;
use App\User;
use App\Mail_reset_user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Kaoken\LaravelMailReset\Controllers\MailResetUsers;

class MailResetController extends Controller
{
  use MailResetUsers;
  /**
  * use trit MailResetUsers
  * @var string
  */
  protected $broker = 'users';

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
  * Mail address change view
  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
  */
  public function getChangeMail()
  {
    return view('auth.email.changeEmail');
  }

  /**
  * Change user's email address
  * @param Request $request
  * @return \Illuminate\Http\JsonResponse|mixed
  */
  public function postChangeMail(Request $request)
  {
    // dd($request);
    $all = $request->only(['email']);
    $validator = Validator::make($all,[
        'email' => 'required|unique:users,email|max:255|email',
    ]);

    if ($validator->fails()) {
        return redirect('changeEmail')
            ->withErrors($validator)
            ->withInput();
    }

    switch ( $this->sendMailAddressChangeLink(Auth::user()->id, $all['email']) ) {
        case MailReset::INVALID_USER:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'User tidak dikenal.']);
            break;
        case MailReset::SAME_EMAIL_EXIST:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'Sudah ada akun yang terdaftar dengan e-mail tersebut.']);
            break;
        case MailReset::INVALID_CONFIRMATION:
        default:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'Terjadi error yang tidak diinginkan.']);
    }
    return redirect()->back()->with('success', 'Sebuah email konfirmasi telah dikirim ke email lama anda, silahkan cek email untuk melanjutkan.');
  }

  public function getChangeMailAddress($token){
    $mailReset = Mail_reset_user::where('token', $token)->first();
    $user = User::find($mailReset->id);
    $user->email = $mailReset->email;
    $user->save();

    Mail_reset_user::where('token', $token)->delete();

    echo "success";
  }
}
