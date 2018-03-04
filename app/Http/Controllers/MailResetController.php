<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use MailReset;
use App\User;
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
  * Mail address change view
  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
  */
  public function getChangeMail()
  {
    return view('change_email');
  }

  /**
  * Change user's email address
  * @param Request $request
  * @return \Illuminate\Http\JsonResponse|mixed
  */
  public function postChangeMail(Request $request)
  {
    $all = $request->only(['email']);
    $validator = Validator::make($all,[
        'email' => 'required|unique:users,email|max:255|email',
    ]);

    if ($validator->fails()) {
        return redirect('change_email')
            ->withErrors($validator)
            ->withInput();
    }

    switch ( $this->sendMailAddressChangeLink(Auth::guard('customer')->user()->id, $all['email']) ) {
        case MailReset::INVALID_USER:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'Invalid user.']);
            break;
        case MailReset::SAME_EMAIL_EXIST:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'The same mail address already exists.']);
            break;
        case MailReset::INVALID_CONFIRMATION:
        default:
            redirect('first_register')
                ->withErrors(['mail_reset'=>'An unexpected error occurred.']);
    }
    return redirect('change_email_ok');
  }
}
