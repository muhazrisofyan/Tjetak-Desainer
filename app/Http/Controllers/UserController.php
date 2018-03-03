<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showChangePasswordForm(){
    return view('auth.passwords.changePassword');
  }

  public function changePassword(Request $request){
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->withErrors(['current-password' => 'Password tidak sesuai! Silahkan coba kembali.']);
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //Current password and new password are same
        return redirect()->back()->withErrors(['new-password' => 'Password tidak boleh sama dengan password sebelumnya! Silahkan coba kembali.']);
    }

    $validatedData = $request->validate([
        'current-password' => 'required',
        'new-password' => 'required|string|min:6|confirmed',
    ]);

    //Change Password
    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with("success","Password changed successfully !");
  }

  /**

  * Handle a registration request for the application.

  *

  * @param \Illuminate\Http\Request $request

  * @return \Illuminate\Http\Response

  */

  public function changeEmail(Request $request)

  {

    $this->validator($request->all())->validate();
    event(new Registered($user = $this->create($request->all())));
    dispatch(new SendVerificationEmail($user));
    return view('auth.verification');

  }

  /**

  * Handle a registration request for the application.

  *

  * @param $token

  * @return \Illuminate\Http\Response

  */

  public function verify($token)

  {

    $user = User::where('email_token',$token)->first();
    $user->verified = 1;
    if($user->save()){
      return view('auth.emailConfirmation',['user'=>$user]);
    }

  }

  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  protected function validator(array $data)
  {
      // dd($data);
      return Validator::make($data, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'phone' => 'required|string|max:14|regex:/[0-9]*/',
          'password' => 'required|string|min:6|confirmed'
      ]);
  }

  /**
   * Create a new user instance after a valid registration.
   *
   * @param  array  $data
   * @return \App\User
   */
  protected function create(array $data)
  {
    // dd($data);
      return User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'email_token' => base64_encode($data['email']),
          'phone' => $data['phone'],
      ]);
  }
}
