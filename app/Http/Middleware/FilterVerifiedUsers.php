<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class FilterVerifiedUsers
{
   /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request $request
    * @param  \Closure $next
    * @return mixed
    */
   public function handle($request, Closure $next)
   {

       $user = Auth::user();

       if (!$user->verified) {
         Auth::logout();
           return redirect('/login')->withErrors(['email' => 'Akun belum diverifikasi!']);
       }

       return $next($request);
   }
}
