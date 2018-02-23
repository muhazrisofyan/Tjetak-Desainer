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
}
