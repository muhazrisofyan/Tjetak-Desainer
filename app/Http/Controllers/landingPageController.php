<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;

class landingPageController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
          return redirect('/home');
        }
        $directory = 'img/d_produk/';
        $files = Storage::disk('public')->allFiles($directory);
        return view('pages.landingpage',compact('files'));
    }
}
